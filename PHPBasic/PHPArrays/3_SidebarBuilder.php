<!DOCTYPE >
<html>
    <head>
        <title>
            Problem 3.  Sidebar Builder
        </title>
        <meta name="description" content="Write a PHP program SidebarBuilder.php that takes data from several input fields and builds 3 sidebars. The input fields are categories, tags and months. The first sidebar should contain a list of the categories, the second sidebar – a list of the tags and the third should contain the months. The entries in the input strings will be separated by a comma and space \", \". "/>
        <style>
            .niceDiv{
                background: linear-gradient(to bottom, skyblue, green);
                width: 15%;
                padding: 25pt;
                margin: 25pt;
                border-radius: 15pt;
                border: solid 1pt;
            }
            ul {
                list-style-type: none;
                padding: 0px;
                margin: 0px;
                text-align: center;
            }        
            a:link {
                color: black;
            }            
            a:hover {
                color: #FF00FF;
            }    
        </style>
    </head>
    <body>
        <form method="post">
            Categories: <input type="text" name="categ" /><br/>
            Tags: <input type="text" name="tags" /><br />
            Months: <input type="text" name="months" /><br />
            <input type="submit" name="submit" value="Color text"/>
        </form>
<?php
if(isset($_POST['categ'])){
    $categ=htmlentities($_POST['categ']);
    $tags=htmlentities($_POST['tags']);
    $months=htmlentities($_POST['months']);
    
    $categArr = explode(", ", $categ);
    $tagsArr = explode(", ", $tags);
    $monthsArr = explode(", ", $months); 
}
function fillDiv($arr){
    foreach ($arr as $key => $value) : ?>
        <ul>
            <li><a href="#"><?=$value?></a></li>
        </ul>        
    <?php endforeach; } ?>


        <div class="niceDiv"><h1>Categories</h1>
            <?php fillDiv($categArr); ?>
        </div>
        <div class="niceDiv"><h1>Tags</h1>
            <?php fillDiv($tagsArr); ?>
        </div>
        <div class="niceDiv"><h1>Months</h1>
            <?php fillDiv($monthsArr); ?>
        </div>
    </body>
</html>