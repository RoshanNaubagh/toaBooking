<div id="app">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<br/>
<br/>
<br>
<h4> Please check the available dates for the Karate Class and Click on <h3>Book Now</h3></h4>


<ul class="list-group list-group horizontal" v-for="data in results" :key="data.id" >
<h3><li class="list-group-item" v-text="data.classDate"></li></h3>
<li class="list-group-item" v-text="data.coach"></li>
<li class="list-group-item" v-text="data.className"></li>
<button type="button" class="btn btn-info" @click="sendData(data.id)">Book Now</button>
</ul>

<br/>
<br/>
<br/>
<br/>


</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>
<script>
var app = new Vue({
  el: '#app',
  data: {
    results: [
          <?php foreach ($data as $individualData):?> 
          {
          id: "<?php echo $individualData['Class_ID'];?>",
          classDate: "<?php echo $individualData['Class_Date'];?>",
          coach: "<?php echo $individualData['Coach'];?>",
          className: "<?php echo $individualData['Class_Name'];?>",
          },
          <?php endforeach;?>
      ],
    userID: "<?php echo $_SESSION['custID'];?>",
  
  },
  methods: {
    sendData: function(dataID){
      var formData = new FormData();
      
      formData.append('CustID',this.userID);
      formData.append('ClassID',dataID);
      var urlLink = "<?php echo base_Url()?>index.php/Booking/bookingClassByUser/"
      this.$http.post(urlLink,formData).then(res=>{
        //if no error in server
        var result = res.body
        alert(result)
      },res =>{
        //if error
      })
    }
  }
})

</script>
