$(document).ready(function(){
load_data();
function load_data(query)
{
$.ajax({
url:"./modulos/busqueda_informe.php",
method:"POST",
data:{query:query},
success:function(data)
{
  $('#result1').html(data);
}
});
}
$('#search_text1').keyup(function(){
var search = $(this).val();
if(search != '')
{
load_data(search);
}
else
{
load_data();
}
});
});
