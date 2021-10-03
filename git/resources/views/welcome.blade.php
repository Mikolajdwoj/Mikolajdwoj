<h1>OPTAD360TEST</h1>

<form action="JSON" method="POST">
    @csrf
    JSON address:       <input type="text" name="JSONf" placeholder="JSON"> <br> <br>
<button type="submit">Load JSON URL</button> <br><br>


</form>

<form action="add" method="POST">
    @csrf
    Settings: <br> <br>
    Currency:       <input type="text" name="currency" placeholder="EUR"> <br> <br>
    Period Length:  <input type="number" name="period" placeholder="0"> <br> <br>
    groupby:        <input type="text" name="groupby" placeholder=""> <br> <br>
    Headers: <br> <br>
    0:        <input type="text" name="z" placeholder="URLS"> <br> <br>
    1:        <input type="text" name="o" placeholder="TAGS"> <br> <br>
    2:        <input type="text" name="t" placeholder="DATE"> <br> <br>
    3:        <input type="text" name="th" placeholder="Estimated revenue"> <br> <br>
    4:        <input type="text" name="f" placeholder="Ad imressions"> <br> <br>
    5:        <input type="text" name="fi" placeholder="Ad eCPM"> <br> <br>
    6:        <input type="text" name="s" placeholder="CLICKS"> <br> <br>
    7:        <input type="text" name="se" placeholder="Ad CTR"> <br> <br>

    <button type="submit">Add manually</button>

</form>
<form action="getbase" method="GET">
    @csrf

    <button type="submit">retrieve data</button> <br><br>

</form>
