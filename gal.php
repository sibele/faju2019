<?php
include './conexao.php';
$roteiro_id = $_GET["url"];
$id = str_replace("gal", "", $roteiro_id);

$sql = "select * from galeria, lugares, roteiro_lugares 
        where galeria.lugares_id = lugares.id
        and roteiro_lugares.lugares_id= lugares.id
        and roteiro_lugares.roteiro_id = $id;";
$query = $mysqli->query($sql);
//$dados = $query->fetch_array();

$sql1 = "Select * from roteiro where id = $id;";
$query1 = $mysqli->query($sql1);
$dados = $query1->fetch_array();
$sobre = $dados['titulo'];
?>

<div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <br><br>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="site-heading text-center text-white d-none d-lg-block">
                        <span>Galeria do <?php echo $sobre ?></span>
                    </h4>
                </div>
                <?php
                foreach ($query as $galeria):
                    ?>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                           data-image="upload/galeria/<?php echo $galeria['caminho'] ?>"
                           data-target="#image-gallery">
                            <img class="img-thumbnail"
                                 src="upload/galeria/<?php echo $galeria['caminho'] ?>"
                                 alt="<?php echo $galeria['descricao'] ?>"
                                 style="width: 400px; height: 200px;">
                        </a>

                        <div style="background-color:white; text-align:center; font-size: 16px; position: relative; 
                             top: -7px; border-radius: 7px; font-family: 'BlinkMacSystemFon';">
                             <?php print_r($galeria['nome']); ?>
                        </div>

                    </div>
                <?php endforeach; ?>


                <div class="modal fade" style=" height: 650px; " id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header" style=" margin-left: 15px; margin-top: 1px;">
                                <h5 class="modal-title" id="image-gallery-title"></h5>
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <button type="button" style=" position: absolute; left: -10px; top: 200px;" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                </button>  

                                <button type="button" style=" position: absolute; right: -10px; top: 200px;" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                </button>

                                <img  id="image-gallery-image" style="  border-radius: 20px;" class="img-responsive col-md-12" src="">
                            </div>
                            <div class="modal-footer2"></div>
                            <div class="modal-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
                    let modalId = $('#image-gallery');
                    $(document)
                    .ready(function () {

                    loadGallery(true, 'a.thumbnail');
                            //This function disables buttons when needed
                                    function disableButtons(counter_max, counter_current) {
                                    $('#show-previous-image, #show-next-image')
                                            .show();
                                            if (counter_max === counter_current) {
                                    $('#show-next-image')
                                            .hide();
                                    } else if (counter_current === 1) {
                                    $('#show-previous-image')
                                            .hide();
                                    }
                                    }

                            /**
                             *
                             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
                             * @param setClickAttr  Sets the attribute for the click handler.
                             */

                            function loadGallery(setIDs, setClickAttr) {
                            let current_image,
                                    selector,
                                    counter = 0;
                                    $('#show-next-image, #show-previous-image')
                                    .click(function () {
                                    if ($(this)
                                            .attr('id') === 'show-previous-image') {
                                    current_image--;
                                    } else {
                                    current_image++;
                                    }

                                    selector = $('[data-image-id="' + current_image + '"]');
                                            updateGallery(selector);
                                    });
                                    function updateGallery(selector) {
                                    let $sel = selector;
                                            current_image = $sel.data('image-id');
                                            $('#image-gallery-title')
                                            .text($sel.data('title'));
                                            $('#image-gallery-image')
                                            .attr('src', $sel.data('image'));
                                            disableButtons(counter, $sel.data('image-id'));
                                    }

                            if (setIDs == true) {
                            $('[data-image-id]')
                                    .each(function () {
                                    counter++;
                                            $(this)
                                            .attr('data-image-id', counter);
                                    });
                            }
                            $(setClickAttr)
                                    .on('click', function () {
                                    updateGallery($(this));
                                    });
                            }
                            });
                            // build key actions
                            $('body').keydown(function(e){
                    const KEY_LEFT = 37;
                            const KEY_RIGHT = 39;
                            switch (e.keyCode){
                    case KEY_LEFT  : {
                    $('.float-left').click();
                            break;
                    }

                    case KEY_RIGHT : {
                    $('.float-right').click();
                            break;
                    }
                    }
                    });
                            $('.ctn-food').cycle({

                    fx: 'scrollHorz',
                            timeout: 0,
                            prev:".prev",
                            next:".next",
                            speed: 300,
                            containerResize: 0,
                            slideResize: 0,
                            fit: 1,
                    });
                            $('.ctn-table').cycle({

                    fx: 'fade',
                            timeout: 0,
                            prev:".prev",
                            next:".next",
                            speed: 500,
                            containerResize:0,
                            slideResize: 0,
                            fit:1


                    });
        </script> </div></div>
<br><br>
