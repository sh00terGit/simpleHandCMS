/* 
 *
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */


//function add a comment via AJAX
function commentMe(newsId) {
    url = BASEURL + "news/commentAjax";
    var request;
    if (window.XMLHttpRequest) {
        request = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        request = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        return;
    }

    var comment = document.getElementById("comment").value;
    var params = 'newsId=' + encodeURIComponent(newsId) + '&text=' + encodeURIComponent(comment);

    request.open('post', url, true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(params);

    request.onreadystatechange = function () {
        if (this.readyState === 4) {
            if (this.status === 200) {
                document.getElementById("comment").value = "";
                var commentBlock = document.getElementById("commentBlock");
                var div = document.createElement('div');
                div.setAttribute("class", "comment");
                div.innerText = comment;
                commentBlock.insertBefore(div, commentBlock.firstChild);
            }
        }
    }
}

//saving data from form via AJAX (update or insert)
function saveAjax() {
    url = BASEURL + "admin/saveAjax";
    var request;
    request = new XMLHttpRequest();
    var title = document.getElementById("title").value;
    var text = document.getElementById("text").value;
    var id = document.getElementById("id").value;
    var type = document.getElementById("type").value;
    title = escapeHtml(title);
    text = escapeHtml(text);
    id = escapeHtml(id);
    type = escapeHtml(type);
    var params = 'title=' + encodeURIComponent(title) + '&text=' + encodeURIComponent(text) + '&id=' + encodeURIComponent(id) + '&type=' + encodeURIComponent(type);
    request.open('POST', url, true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(params);

    request.onreadystatechange = function () {
        if (this.readyState === 4) {
            if (this.status === 200) {
                location.reload();
            }
        }
    }
}

function escapeHtml(text) {
    var map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '\''
    };
 
    return text.replace(/[&<>"']/g, function(m) { return map[m]; });
}


// getting visible form
function viewAddForm() {
    var form = document.getElementById('form');
    form.style.visibility = 'visible';
    form.reset();
    document.getElementById("type").value = 'add';

}


// delete news via AJAX
function deleteAjax(id) {
    url = BASEURL + "admin/deleteAjax";
    var elem = document.getElementById(id);
    var request;
    if (window.XMLHttpRequest) {
        request = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        request = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        return;
    }

    request.onreadystatechange = function () {
        if (this.readyState === 4) {
            if (this.status === 200) {
                elem.remove();
            }
        } else if (request.status == 404) {
            alert("Ошибка: запрашиваемый скрипт не найден!");
        }
    }
    request.open('GET', url + "?id=" + id, true);
    request.send('');

}

// getting news data via AJAX
function selectAjax(id) {
    url = BASEURL + "admin/selectAjax";
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
            // response glued by '|' char
            // splitted it
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
