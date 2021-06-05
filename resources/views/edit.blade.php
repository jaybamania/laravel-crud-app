<x-header data="Edit Member Form" />
<div class="mainbody">


<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$info['id']}}" >
    <div class="singleform">
        <label>Name : </label>
        <input type="text" name="name" value="{{$info['name']}}" id="name">
        
    </div>
    <div class="singleform">
        <label>Email : </label>
        <input type="email" name="email" value="{{$info['email']}}" id="email">
        
    </div>
    <div class="singleform">
        <label>Phone : </label>
        <input type="text" name="phone" value="{{$info['phone']}}" id="phone">
    </div>
    <div class="singleform">
        <label>Address : </label>
        <textarea  name="address" id="address">
            {{$info['address']}}   
        </textarea>
        <span style="color:red">@error('address'){{$message}}@enderror</span>
    </div>
    <button type="submit">Submit</button>
</form>

</div>
<style>
    *{
        margin:0px;
    }
    .mainbody{
        background-color:lightgrey;
        padding:100px;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        height:auto;
    }
    form{
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        height:auto;
        border: 1px solid black;
        padding:20px;
        background-color:#ffeefe;
        box-shadow: 3px 4px 3px 2px rgb(0,0,0,0.3),3px 4px 3px 2px rgb(0,0,0,0.4);
    }
    form:hover{
        transition:translateX(90);
    }
    .singleform{
        margin-bottom: 10px;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .singleform > input{
        margin:5px;
        height:30px;
        min-width:200px !important;
    }
    .singleform > textarea{
        margin:5px;
        height:60px;
        min-width:200px !important;
    }
    .singleform > label{
        width:70px;
    }

</style>