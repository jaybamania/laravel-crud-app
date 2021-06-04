
<x-header />
<div class="mainbody">
    <div class="addButton">
        <button ><a href="/add">+ Add Button</a></button>
    </div>
    <div class="usertable">
        <h1>Hello</h1>
    </div>
</div>

<style>
    *{
        margin:0px;
    }
    .mainbody{
        background-color:lightgrey;
        padding:10px;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
    }
    .addButton{
        width:100%;
        height:60px;
        display:flex;
        align-items:center;
        justify-content:center;
        border-bottom: 1px solid black;
        
    }
    .addButton button{
        border-radius: 5px;
        height:30px;
        background-color:yellow;
        opacity: 0.9;
    }
    .addButton button:hover{
        opacity: 1;
    }

</style>
<script>
 function processAjaxData(view, urlPath){
    //  document.getElementById("content").innerHTML = response.html;
    //  document.title = response.pageTitle;
    //  window.history.pushState({"html":response.html,"pageTitle":response.pageTitle},"", urlPath);
    
    // window.history.pushState(view, 'Title', urlPath);
    // preventDefault();
    
 }
</script>