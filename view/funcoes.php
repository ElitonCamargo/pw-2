<?php

function alerta($titulo, $texto, $tipo='success')
{
    echo'
        <div class="alert alert-'.$tipo.' alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">'.$titulo.'</h4>
        <hr>
        <p class="mb-0">'.$texto.'</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    ';
}