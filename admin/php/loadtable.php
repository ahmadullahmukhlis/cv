<?php
include "config.php";
 $link=$_POST['link'];
 $output="";
 $output.='<table class="table table-sm table-hover table-striped">';
if($link=="home")
{
  
    $sql="SELECT * FROM contect ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $output.='<thead class="thead">
        <tr>
        <th>id</th>
        <th>name</th>
        <th>mission</th>
        <th>address</th>
        <th>email</th>
        <th>phone</th>
        <th>facebook</th>
        </tr>
    </thead>
    <tbody class="tbody"> ';
        while($row=mysqli_fetch_assoc($result)){
            $output.="
    <tr>
        <td>{$row["cid"]}</td>
        <td>{$row["cname"]}</td>
        <td>{$row["cmission"]}</td>
        <td>{$row["caddress"]}</td>
        <td>{$row["cemail"]}</td>
        <td>{$row["cphone"]}</td>
        <td>{$row["cfacebook"]}</td>
    </tr>
    
";
        }
    }else{
        echo "<h1 align='center'> no record here </h1>";
    }
    

}
elseif($link=="activities")
{
 
    $sql="SELECT * FROM activities ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $output.='<thead class="thead">
        <tr>
        <th>id</th>
        <th>name</th>
        <th>start date</th>
        <th>end date</th>
        <th>major</th>
        <th>description</th>
        </tr>
    </thead>
    <tbody class="tbody"> ';
        while($row=mysqli_fetch_assoc($result)){
            $output.="
    <tr>
        <td>{$row["acid"]}</td>
        <td>{$row["comp-name"]}</td>
        <td>{$row["sdate"]}</td>
        <td>{$row["edate"]}</td>
        <td>{$row["major"]}</td>
        <td>{$row["acdesc"]}</td>
    </tr>
    
";
        }
    }else{
        echo "<h1 align='center'> no record here </h1>";
    }
}
elseif($link=="award")
{

    $sql="SELECT * FROM award ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $output.='<thead class="thead">
        <tr>
        <th>id</th>
        <th>award date</th>
        <th>description</th>
        </tr>
    </thead>
    <tbody class="tbody"> ';
        while($row=mysqli_fetch_assoc($result)){
            $output.="
    <tr>
        <td>{$row["aid"]}</td>
        <td>{$row["adate"]}</td>
        <td>{$row["adesc"]}</td>
    </tr>
    
";
        }
    }else{
        echo "<h1 align='center'> no record here </h1>";
    }
}



elseif($link=="education")
{

    $sql="SELECT * FROM education ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $output.='<thead class="thead">
        <tr>
        <th>id</th>
        <th>name</th>
        <th>start date</th>
        <th>end date</th>
        <th>major</th>
        <th>GPA</th>
        </tr>
    </thead>
    <tbody class="tbody"> ';
        while($row=mysqli_fetch_assoc($result)){
            $output.="
    <tr>
        <td>{$row["eid"]}</td>
        <td>{$row["uname"]}</td>
        <td>{$row["sdate"]}</td>
        <td>{$row["edate"]}</td>
        <td>{$row["major"]}</td>
        <td>{$row["GPA"]}</td>
    </tr>
    
";
        }
    }else{
        echo "<h1 align='center'> no record here </h1>";
    }
}



elseif($link=="experience")
{
    $sql="SELECT * FROM experience ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $output.='<thead class="thead">
        <tr>
        <th>id</th>
        <th>company name</th>
        <th>start date</th>
        <th>end date</th>
        <th>major</th>
        <th>description</th>
        </tr>
    </thead>
    <tbody class="tbody"> ';
        while($row=mysqli_fetch_assoc($result)){
            $output.="
    <tr>
        <td>{$row["exid"]}</td>
        <td>{$row["comp-name"]}</td>
        <td>{$row["sdate"]}</td>
        <td>{$row["edate"]}</td>
        <td>{$row["major"]}</td>
        <td>{$row["expdesc"]}</td>
    </tr>
    
";
        }
    }else{
        echo "<h1 align='center'> no record here </h1>";
    }
}


elseif($link=="objective")
{
  
    $sql="SELECT * FROM objective ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $output.='<thead class="thead">
        <tr>
        <th>id</th>
        <th>description</th>
        </tr>
    </thead>
    <tbody class="tbody"> ';
        while($row=mysqli_fetch_assoc($result)){
            $output.="
    <tr>
        <td>{$row["oid"]}</td>
        <td>{$row["odesc"]}</td>
    </tr>
    
";
        }
    }else{
        echo "<h1 align='center'> no record here </h1>";
    }
}

elseif($link=="intrest")
{
   
    $sql="SELECT * FROM intrest ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $output.='<thead class="thead">
        <tr>
        <th>id</th>
        <th>name</th>
        </tr>
    </thead>
    <tbody class="tbody"> ';
        while($row=mysqli_fetch_assoc($result)){
            $output.="
    <tr>
        <td>{$row["iid"]}</td>
        <td>{$row["iname"]}</td>
    </tr>
    
";
        }
    }else{
        echo "<h1 align='center'> no record here </h1>";
    }
}

elseif($link=="skill")
{

    $sql="SELECT * FROM skile ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $output.='<thead class="thead">
        <tr>
        <th>id</th>
        <th>skill head</th>
        <th>experts</th>
        <th>description</th>
        </tr>
    </thead>
    <tbody class="tbody"> ';
        while($row=mysqli_fetch_assoc($result)){
            $output.="
    <tr>
        <td>{$row["sid"]}</td>
        <td>{$row["shead"]}</td>
        <td>{$row["sper"]}</td>
        <td>{$row["sdesc"]}</td>
    </tr>
    
";
        }
    }else{
        echo "<h1 align='center'> no record her </h1>";
    }
}




$output.='</tbody> </table>';
echo $output;




?>