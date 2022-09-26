<div id="footer" class="footer border-top border-primary border-4 bg-dark p-3 mt-auto text-light">

    <footer class="py-3 my-4 text-center">

        <ul class="nav justify-content-center border-bottom border-1 pb-3 mb-3">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-muted"><?=$data['request']::host();?></a></li>
            <li class="nav-item"><a href="/clicks" class="nav-link px-2 text-muted"><?=$data['lang']['footer']['links']['counter'];?></a></li>
        </ul>

        <p>© <?=date('Y') . ' ' . $data['request']::host();?> - <?=$data['lang']['footer']['terms'];?>.</p>

    </footer>

</div>