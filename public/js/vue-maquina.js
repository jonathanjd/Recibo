new Vue({

    el:'body',

    data:{
        activadoEstado:false,
        activadoEntregado:false,
    },

    methods:{
        mostrar:function(selected){
            if (selected == 'maquina-modelo') {
                return this.activadoEstado = true;
            }
        },

    
    }

});