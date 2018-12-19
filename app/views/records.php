
<div class="content">
    <div class="left">

        <?php foreach ($categories as $cat):?>
            <div class="categories">
                <div class="title"><?=$cat?></div>
                <a href="/records/delcat?catName=<?=$cat?>" class="del">x</a>
                <a href="/records/viewrec?catName=<?=$cat?>" class="view">=></a>
            </div>
        <?php endforeach; ?>





        <form action="/addcat">
            <input type="text"name="cat_name">
            <input type="submit"value="ADD">
        </form>
    </div>
    <div class="right">




        <form action="/records/addrecord" method="post">
            <dl>
                <dt>name</dt>
                <dd><input type="text" name="recordname"></dd>
                <dt>text</dt>
                <dd><textarea name="key"></textarea></dd>
            </dl>
            <input type="submit">
        </form>
    </div>
</div>