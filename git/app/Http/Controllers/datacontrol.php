<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
class datacontrol extends Controller
{
    //
    function addData(Request $req)
    {
        $number=0;
        $member = new member;
        $member->currency = $req->currency;
        $member->PeriodLength = $req->period;
        $member->groupby = $req->groupby;
        $member->$number = $req->z;
        $number=1;
        $member->$number = $req->o;
        $number=2;
        $member->$number = $req->t;
        $number=3;
        $member->$number = $req->th;
        $number=4;
        $member->$number = $req->f;
        $number=5;
        $member->$number = $req->fi;
        $number=6;
        $member->$number = $req->s;
        $number=7;
        $member->$number = $req->se;
        $member->save();
        return redirect('/');
    }

    function readJSON(Request $req)
    {


        // Read File

        $member = new member;
        $json= $req->JSONf;
        $json = file_get_contents($json);

        // $data = json_decode($jsonString, true);


        $arr = json_decode($json, true);
        foreach ($arr as $a) {
            foreach ($a as $key => $value) {


                    $member->$key = $value;
            }
        }
        $member->save();

        return redirect('/');



    }
    function getbase()
    {
        $db_host='127.0.0.1';
        $db_user='root';
        $db_pass='';
        $db_name='members';

        $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
        if(!$conn)
        {
            die('failed to connect' . mysqli_connect_error());
        }



        $sql = 'select * from members';
        $query = mysqli_query($conn,$sql);

        if(!$query)
        {
            die('error at query' . mysqli_error($conn));
        }

        echo "
        <table class='table'
        <tr>
        <th>currency</th>
        <th>PeriodLength</th>
        <th>groupby</th>
        <th>0</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
        </tr>";
        while ($row = mysqli_fetch_array($query))
        {
            echo ' <tr>
            <td>'.$row['currency'].'</td>
            <td>'.$row['PeriodLength'].'</td>
            <td>'.$row['groupby'].'</td>
            <td>'.$row['0'].'</td>
            <td>'.$row['1'].'</td>
            <td>'.$row['2'].'</td>
            <td>'.$row['3'].'</td>
            <td>'.$row['4'].'</td>
            <td>'.$row['5'].'</td>
            <td>'.$row['6'].'</td>
            <td>'.$row['7'].'</td>
            </tr>';
        }

        echo "</table>";




        //return redirect('/');
    }
}
