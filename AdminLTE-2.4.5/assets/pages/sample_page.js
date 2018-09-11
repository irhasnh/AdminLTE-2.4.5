$(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

function simpan(){
  // if($('#namaBarang').val()==''){
  //   $.alert("Nama barang harap diisi..!");
  // }else{
    $('#sampleForm').submit();
  // }
}

// ///////// set u inventory item list
function sample_funtion(value){

 
    $.confirm({
        icon: 'fa fa-question',
        theme: 'modern',
        closeIcon: true,
        animation: 'scale',
        type: 'orange',
        title: 'Confirmation!',
        content: 'Delete data?',
        buttons: {
            confirm: function () {                
                $.ajax({ 
                    url: 'delete_page', 
                    type : "post",      
                    dataType : "json",                                               
                    // data:{id:id},
                    error: function(result){                    
                        // console.log(result.responseText);
                        $.alert('Server Error: delete failed');
                        return false;
                    },
                    success: function(result) {     
                      console.log(result);                                                                    
                        if(result.sts=='1'){
                              window.location = 'page'; 
                        }else{
                            $.alert(result.msg);
                        }                       
                       
                    }
                }); 
            },
            cancel: function () {               
            }            
        }
    });
}