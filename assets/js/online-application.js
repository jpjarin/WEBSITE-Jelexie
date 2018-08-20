$(document).ready(function() {
           
           $("#submitApplication").click(function(e) {
               
               // alert('hello');
               var proceed = true;

               if(proceed) //everything looks good! proceed...
        {

           //data to be sent to server        
            var m_data = new FormData();   
            m_data.append( 'name', $('#name').val());
            m_data.append( 'email', $('#email').val());
            m_data.append( 'position', $("select#position option:selected").val());
            m_data.append( 'file_attach', $('input[name=resume]')[0].files[0]);
              
            //instead of $.post() we are using $.ajax()
            //that's because $.ajax() has more options and flexibly.

            $.ajax({
              url: '././assets/contact.php',
              data: m_data,
              processData: false,
              contentType: false,
              type: 'POST',
              dataType:'json',
              success: function(response){
                 //load json data from server and output message    
                if(response.type == 'error'){ //load json data from server and output message    
                    output = '<div class="error">'+response.text+'</div>';
                }else{
                    output = '<div class="success">'+response.text+'</div>';
                }
                $("#response").hide().html(output).slideDown();
              }
            });
             
 
        }

           });
  });