<style>
    .col50 {
        float: left;
        width: 50%;
    } 
    #form {
        visibility: hidden;
    }

</style>
<div class="col50">
    <table id="newsTable">
        <th>новость</th>
        <th>дата обновления</th>
        <th></th>
        <th></th>
        <th></th>
        <?php foreach ($this->news as $news) : ?>
            <tr>
                <td><?= $news->getTitle() ?></td>
                <td><?= $news->getDate() ?></td>
                <td> <a href="#" onclick="selectAjax(<?= $news->getId() ?>)"> редактировать</a></td>
                <td></td>
            </tr>
        <?php endforeach; ?>

    </table>
    <button onclick="viewAddForm()">Добавить</button>
</div>

<div class="col50" >
    <form id="form">
        <input type="hidden" id="type" name="type" value="add">
        <input type="hidden" id="id" name="id" value="">
        <input name="title" id ="title" type="text" size="100">
        <p></p>
        <textarea  name="text" id="text" cols="75" rows="10"></textarea>
        <p></p>
        <input type="submit" onclick="saveAjax()" value="Сохранить">
    </form>
</div>

<script>

    function viewAddForm() {
        var form = document.getElementById('form');
        form.style.visibility = 'visible';
        form.reset();
        document.getElementById("type").value = 'add';

    }

    function saveAjax() {
        url = "<?= URL ?>admin/saveAjax";
        var request;
        if (window.XMLHttpRequest) {
            request = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            request = new ActiveXObject("Microsoft.XMLHTTP");
        } else {
            return;
        }
        var title = document.getElementById("title").value;
        var text = document.getElementById("text").value;
        var id = document.getElementById("id").value;
        var type = document.getElementById("type").value;
        var params = 'title=' + encodeURIComponent(title) + '&text=' + encodeURIComponent(text) + '&id=' + encodeURIComponent(id) +  '&type=' + encodeURIComponent(type);
        request.open('post', url, true);
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        request.send(params);
        location.reload();
    }


    function selectAjax(id) {
        url = "<?= URL ?>admin/selectAjax";
        var request;
        if (window.XMLHttpRequest) {
            request = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            request = new ActiveXObject("Microsoft.XMLHTTP");
        } else {
            return;
        }

        request.onreadystatechange = function () {
            if (request.status == 200) {
                var requestArr = request.responseText.split("|");
                document.getElementById("form").style.visibility = 'visible';
                document.getElementById("title").value = requestArr[0];
                document.getElementById("text").value = requestArr[1];
                document.getElementById("id").value = requestArr[2];
                document.getElementById("type").value = 'update';
            } else if (request.status == 404) {
                alert("Ошибка: запрашиваемый скрипт не найден!");
            }
        }
        request.open('GET', url + "?id=" + id, true);
        request.send('');
    }

</script>
