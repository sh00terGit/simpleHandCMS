<style>
    .col50 {
        float: left;
        width: 50%;
    }   
    
</style>
<div class="col50">
<table>
    <th>новость</th>
    <th>дата обновления</th>
    <th></th>
    <th></th>
    <th></th>
    <?php foreach ($this->news as $news) : ?>
    <tr>
    <td><?=$news->getTitle()?></td>
    <td><?=$news->getDate()?></td>
    <td> <a href="#" onclick="selectAjax(<?=$news->getId()?>)"> редактировать</a></td>
    <td></td>
    </tr>
    <?php endforeach; ?>
    
</table>
</div>

<div class="col50" id="form">    

</div>

<script>
function selectAjax(id) {
  url = "<?= URL ?>admin/selectAjax";      
  var request;
  if(window.XMLHttpRequest){
      request = new XMLHttpRequest();
  } else if(window.ActiveXObject){
      request = new ActiveXObject("Microsoft.XMLHTTP");  
  } else {
      return;
  }
  request.onreadystatechange = function(){
           if(request.status==200){    
                        document.getElementById("form").innerHTML = "<b>"+request.title+"</b>";
                     }else if(request.status==404){
                        alert("Ошибка: запрашиваемый скрипт не найден!");
                     }          
            }
              
    
    request.open ('GET', url+"?id="+id , true);
    request.send ('');
  }
 
</script>