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
        <?=$data['lang']['generate']['title'];?>
    </h1>

    <p><?=$data['lang']['generate']['subtitle'];?>.</p>

</div>

<div class="result_shorted m-auto border shadow text-center bg-light">

    <div class="d-flex justify-content-center">
        <input type="text" name="link" id="contentCopy" value="<?=$_SERVER['HTTP_HOST'] . '/' . $data['link']['reference'];?>">
        <button id="copy"><strong><?=$data['lang']['generate']['form']['button'];?></strong></button>
    </div>

    <div class="text-start">
        <br>
        <p><?=$data['lang']['generate']['form']['subcontent'];?>: <a href="<?=$data['link']['original'];?>"><?=$data['link']['original'];?></a></p>
        <br>
        <p class="m-0"><?=$data['lang']['generate']['content'];?>.</p>
    </div>

</div>

<script>
    document.getElementById("copy").onclick = function() {
        var text = document.getElementById("contentCopy").value;
        copyTextToClipboard(text);
    }
    
    async function copyTextToClipboard(text) {
        try {
            await navigator.clipboard.writeText(text);
            alert('Text copied to clipboard');
        } catch (err) {
            alert('Error in copying text: ', err);
        }
    }
</script>