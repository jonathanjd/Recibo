new Vue({

    el:'body',

    data:{
        nombre:'',
        apellido:'',
        cedula:'',
        telefono_uno:'',
    },

    computed:{
        mostrar:function(){ 
            return this.nombre && this.apellido && this.cedula && this.telefono_uno;
        },
    },

})