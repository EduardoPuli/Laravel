<template>
<div class="col-8 offset-2" >
  <div class="card">
  <div class="card-header">
    <img src="/images/descarga.png" class="logo_200 mx-auto d-block">
  </div>
    <div class="card-body">
      <div class="input-group">
        <span class="input-group-text">Nombre</span>
        <input type="text" class="form-control" v-model="name">
      </div>

      <div class="input-group mt-3">
        <span class="input-group-text">Apellido</span>
        <input type="text" class="form-control" v-model="surname">
      </div>

      <div class="input-group mt-3">
        <span class="input-group-text">Email</span>
        <input type="email" class="form-control" v-model="email">
      </div>

      <div class="input-group mt-3">
      <textarea class="form-control" placeholder="Comentarios" v-model="content"></textarea>
      </div>

      <button @click="saveContact" class="btn btn-primary float-right mt-3 btn-lg">Enviar</button>

    </div>
  </div>
</div>
</template>

<script>
export default {

  created(){
    //identificador
    this.saveContact();
  },

    methods: {
      saveContact: function(){

        console.log(this.name + " " + this.surname + " " + this.email + " " + this.content )
        return;
        fetch('/api/post/')
          .then(response => response.json())
          .then(json => this.post = json.data);
        //console.log("click" + p.title);
        //this.postSelected = p;
      }
    },

    data: function () {
      return {
        name: "",
        surname: "",
        email: "",
        content: ""

    };
  } 
};
</script>
