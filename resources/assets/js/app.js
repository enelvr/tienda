
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#category',
    data: {
    	categorias:[],
    	newCategoria : {'descripcion':''},
    	fillCategoria : { 'descripcion' : '', 'id':''},
    	pagination: {
            total: 0,
            per_page: 2,
            from: 1,
            to: 0,
            current_page: 1,
        },
        offset: 4,
        formErrors: {},
        formErrorsUpdate: {},
    },
    computed: {
        isActived: function() {
            return this.pagination.current_page;
        },

        pagesNumber: function() {
            if (!this.pagination.to) {
                return [];
            }
            var from = this.pagination.current_page - this.offset;
            if (from < 1) {
                from = 1;
            }
            var to = from + (this.offset * 2);
            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page;
            }
            var pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },
    mounted(){
    	this.getVueCategorias(this.pagination.current_page);
    },
    methods:{
    	showAddCategoriaModal: function(){
    		this.newCategoria.descripcion='';
    		this.formErrors='';
    	},
    	getVueCategorias: function(page) {
            var that = this;
            axios.get('api/categorias?page='+page).then(function (response) {
                that.categorias = response.data.data.data;
                that.pagination = response.data.pagination;

                that.$nextTick(function() {
                    $('[data-toggle="popover"]').popover();
                })
            });
        },
        createCategoria: function() {                 
            var input = this.newCategoria;
            var that = this;
            axios.post('api/categorias', input).then(function (response) {
                that.getVueCategorias();
                toastr.options = {
                  "timeOut": "2000",
                },
                toastr.success('Categoria Agregada con Exito');
                $(that.$refs.add_categoria_modal).on("hidden.bs.modal", that.hideAddCategoriaModal());
            })
            .catch(function (error) {
                that.formErrors = error.response.data;
                toastr.options = {
                  "timeOut": "2000",
                },
                toastr.error('Oops! Algunos campos son Requeridos!');
            });
        },
    	hideAddCategoriaModal: function() {
            $(this.$refs.add_categoria_modal).modal('hide');
        },

        editCategoria: function(categoria) {
            this.fillCategoria = categoria;
            this.formErrors = '';
        }, 
    	updateCategoria: function() {
            var input = this.fillCategoria;
            var id = this.fillCategoria.id;
            var that = this;
            axios.patch('api/categoria/' + id, input).then(function (response) {
                that.getVueCustomers();
                toastr.options = {
                  "timeOut": "2000",
                },
                toastr.success('Categoria actualizada con exito');
                $(that.$refs.add_categoria_modal).on("hidden.bs.modal", that.hideEditCategoriaModal());
            })
            .catch(function (error) {
                that.formErrors = error.response.data;
                toastr.options = {
                  "timeOut": "2000",
                },
                toastr.error('Oops! Fill in the required fields!');
            });
        },

        hideEditCategoriaModal: function() {
            $(this.$refs.edit_categoria_modal).modal('hide');
        },

        deleteCategoria: function(id) {
            this.categorias = this.categorias.filter(function (item) {
                return item.id != id;
            });
            var that = this;
            axios.delete('api/categoria/' + id).then(function (response) {
                that.getVueCategorias();
                toastr.options = {
                  "timeOut": "2000",
                },
                toastr.warning('Categoria Eliminada');
            });
        },  
        changePage: function(page) {
            this.pagination.current_page = page;
            this.getVueCategorias(page);
        },

        moment: function (date) {
            return moment(date);
        },

        date: function (date) {
            return moment(date).format('MMMM Do YYYY, h:mm:ss a');
        },  
        filters: {
        moment: function (date) {
            return moment(date).format('L');
        }
    	}, 
    },
});
