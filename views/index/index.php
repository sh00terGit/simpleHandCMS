
<h2>You may click the link <a href="<?= URL ?>admin">admin  </a> for forwarding to the administration kit and click on the <a href="<?= URL ?>news">news</a> link to see the latest news.</h2>
<h2>Test task</h2>

<h4>News Management System (Sample Task #1)</h4>
<p>
    <b>Main Requirements</b>
    1)  Code should be easy to read and contain comments in english. 
    2)  Templates and logic should be in separate files. 
    3)  All result files should be .7z-packed and include DB schema as well.
    4)  Any third-party libraries or classes are not allowed to be used.  
</p>
<p>
    <b>DB</b>
    You should use MySQL as DB.
    Make sure you add any necessary indexes to tables.
    When you submit the code, set the connection parameters as follows:
<ul>
    <li>Server: 	localhost</li>
    <li>Username: 	test</li>
    <li>Password:	test</li>
    <li>Database: 	testtask</li>
</ul>	
</p>
<p>
    <b>List Page</b>
    In list page you should implement list of all news with pagination (5 news per page). Pages should be in format: 1 2 [3] 4 5 N. In this case 3 means current page.
</p>
<p>
    <b>Add / Edit Pages</b>
    All actions on these pages should use AJAX via XMLHttpRequest. Here is the list of fields:
<ul>
    <li>Title. News title, input type=text, max length = 255</li>
    <li>Date. News date.</li>
    <li>Text. News text, textarea</li>
</ul>    
</p>
<p>
    <b>View Page / comments page</b>
    On this page show news title and news text. There should be a form below for adding comments (addition should use AJAX via XMLHttpRequest) and a list of comments related to this news.
</p>
<p>
    <b>Testing data</b>
    Please, add testing data to check the task. Add 20 news and 10 comments related to each news. 

</p>
<p>
    <b>PHP Requirements</b>    
Code must execute on PHP 7.
</p>
<p>
    <b>Sources</b>
Upload sources as 7z archive to file share hosting (like dropbox, google docs, etc.) and provide a link.
</p>

