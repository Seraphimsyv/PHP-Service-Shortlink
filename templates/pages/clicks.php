<style>
    div.result_shorted {
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

<div class="result_shorted m-auto mt-0 mb-0 pt-0 pb-0 text-start">
    
    <h1 class="display-5">
        <?=$data['lang']['clicks']['title'];?>
    </h1>

    <p><?=$data['lang']['clicks']['subtitle'];?>.</p>

</div>

<div class="result_shorted m-auto border shadow text-center bg-white">

    <form action="" method="POST" class="d-flex justify-content-center">
        <input type="text" name="link" placeholder="<?=$data['lang']['clicks']['form']['placeholder'];?>">
        <button><strong><?=$data['lang']['clicks']['form']['button'];?></strong></button>
    </form>

    <div class="text-start">
        <br>
        <p>* <?=$data['lang']['clicks']['content'];?>.</p>
    </div>

</div>