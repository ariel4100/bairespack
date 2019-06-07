<nav>
    <ol class="list-unstyled d-flex">
        <li class="ml-2">Productos</li>
        <li class="ml-2">| {{ isset($categoria) ? ucwords(strtolower($categoria->title)) : null }}</li>
        <li class="ml-2">| {{ isset($producto) ? ucwords(strtolower($producto->title)) : null }}</li>
    </ol>
</nav>