<?php
/* WIDGETS */
 
if (function_exists('register_sidebar')) //se a função "register_sidebar" existir (se o wordpress suportar widgets), então faz o que estiver entre as { ... } (linhas 5 e 13);
{
    register_sidebar(array( //inicio do "registo" de uma zona para widgets;
        'name'          => 'Sidebar', //define o nome da zona de widgets;
        'before_widget' => '<div class="widget">', //define o código que fica antes do inicio do widget;
        'after_widget'  => '</div>', //define o código que fica no fim do widget;
        'before_title'  => '<h3>', //define o código que aparece antes de um título (caso o widget tenha um título);
        'after_title'   => '</h3>', //define o código que fica depois do título;
    )); //termina o registo da zona;
}
 
?>