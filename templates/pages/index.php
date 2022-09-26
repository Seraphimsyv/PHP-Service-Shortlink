<style>
    #form_shortened {
        width: fit-content;
        padding: 4rem;
        padding-left: 6rem;
        padding-right: 6rem;
    }
    input {
        padding: 1rem;
        width: auto;
        border: 1px solid #628ee1;
    }
    button {
        width: auto;
        color: white;
        background: #628ee1;
        border: none;
    }
</style>

<div id="form_shortened" class="m-auto border shadow text-center bg-light">

    <h1 class="display-5">
        <?=$data['lang']['index']['title'];?>
    </h1>

    <div>
        <form action="/generate" method="POST" class="d-flex justify-content-center">
            <input type="text" name="link" id="" placeholder="<?=$data['lang']['index']['form']['placeholder'];?>">
            <button><strong><?=$data['lang']['index']['form']['button'];?></strong></button>
        </form>
    </div>

    <br>

    <p class="m-0"><?=$data['lang']['index']['content'];?></p>

</div>