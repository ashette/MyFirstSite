<script>
    $(document).ready(
            function () {
                $("#pikame").PikaChoose();
            });
</script>
<div id="content">   
    <div id="pagehead" >

        <a>ПОРТФОЛИО</a>                  

    </div>
    <div class="wrapper">
        <div class="gallery">
            <ul id = "pikame">
                <?php
                for ($j = 1; $j <= count($images); $j++):
                    echo '<li><img src="Gallery/' . $images[$j]['img'] . '" > <span>' . $images[$j]['comment'] . ' </span> </li>';
                endfor;
                ?>
            </ul>
        </div>

    </div>
</div>