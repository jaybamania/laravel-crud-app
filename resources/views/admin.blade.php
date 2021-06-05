<x-header data="Admin Panel" />
<div class="mainbody">
    <div class="addButton">
        <button ><a href="/add">+ Add Member</a></button>
    </div>
    <div>
        @if(session('name'))
          <h3 style="color:green;">Member {{session('name')}}  has been added</h3>
        @endif

        @if(session('updated_name') && session('id'))
          <h3 style="color:green;">Member : {{session('id')}} {{session('updated_name')}}  has been Updated</h3>
        @endif

        @if(session('delete_id'))
          <h3 style="color:green;">Member {{session('delete_id')}}  has been Deleted Successfully</h3>
        @endif

    </div>
    <div class="usertable">
        <table  style="background-color:white">
            <tr>
                <th>Sr.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th colspan="2">Operations</th>
            </tr>
            
            <?php $i=1; ?>
           
            @foreach($members as $member)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$member->name}}</td>
                    <td>{{$member->email}}</td>
                    <td>{{$member->phone}}</td>
                    <td>{{$member->address}}</td>
                    <td>
                        <a style="background-color:red" href="delete/{{ $member->id }}">Delete</a>
                        <a style="background-color:orange" href="edit/{{ $member->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

<style>
    *{
        margin:0px;
    }
    .mainbody{
        background-color:lightgrey;
        padding:10px 10px 100px 10px;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        height:auto;
    }
    .addButton{
        width:100%;
        height:60px;
        display:flex;
        align-items:center;
        justify-content:center;
        border-bottom: 1px solid black;
        margin-bottom:30px;
    }
    .addButton button{
        border-radius: 5px;
        height:30px;
        background-color:yellow;
        opacity: 0.8;
        color : grey;
        border: 1px solid grey;
    }
    .addButton button:hover{
        opacity: 1;
        border: 1px solid black;
        color:black;
    }
    table {
        border-collapse: collapse;
        width: 90%;
        }
    a{
        text-decoration: none;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    tr:hover {background-color: #f5f5f5;}
    tr:nth-child(even) {background-color: #f2f2f2;}

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