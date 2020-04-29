<?php
require "a4q3Head.php";
$_SESSION['home']=false;
if(isset($_SESSION['loggedIn'])&& $_SESSION['loggedIn']==true){
    echo "<h1>Welcome, " . $_SESSION['name'] . "</h1>";
    echo "<form action='php/redirector.php' method='post'>
            <input type='submit' value='Logout' class='login'>
            <input type='hidden' value='logout' name='logout'> 
            </form>";
}else{
    echo "<a href='php/loginPage.php' class='login'>Login/Register</a>";
}
?>

<form action="php/searchProcess.php" method="post" onreset="whenReset()" >

    <div class="info">
        <fieldset>

            <legend> Reservation Information </legend>

            <br/>
            <label class="prompt">
                Number of Rooms (max 5 people per room)
                <input id= "nbOfRooms" type="number" name="nbOfRooms" max="5" min="1" />
            </label>
            <br/>

            <label class="prompt">Smoker?</label>
            <label>
                <input type="radio" name="Smoke" value="yes" />
            </label>
            <label>Yes</label>
            <label>
                <input type="radio" name="Smoke" value="no"/>
            </label>
            <label>No</label>

            <br/>
            
            <label class="prompt">Check-in:</label>
            <label>
                <input type="date" name="checkIn" />
            </label> <br/><br/>
            <label>Check-out:</label>
            <label>
                <input type="date" name="checkOut" />
            </label> <br/>

            <br/>
        </fieldset>
    </div>
    <div class="room">
        <fieldset>
            <legend>Room Specifications</legend>

            <ul>
                <li>
                    <label class="prompt">Number of single/double beds:</label> <br/>
                    <label>
                        <input type="checkbox" name="beds" value="0/2">
                    </label>
                    <label>0/2</label>
                    <label>
                        <input type="checkbox" name="beds" value="2/0">
                    </label>
                    <label>2/0</label>
                    <label>
                        <input type="checkbox" name="beds" value="1/1">
                    </label>
                    <label>1/1</label>
                    <label>
                        <input type="checkbox" name="beds" value="0/2">
                    </label>
                    <label>0/2</label>
                    <label>
                        <input type="checkbox" name="beds" value="1/2">
                    </label>
                    <label>1/2</label>
                    <br/>
                    <br/>
                </li>

                <li>
                    <label class="prompt">Do you have a preferred locations for the hotel?</label> <br/>
                    <label>
                        <input type="checkbox" name="location[]" value="Downtown">
                    </label>
                    <label>Downtown</label>
                    <label>
                        <input type="checkbox" name="location[]" value="MontrealEast">
                    </label>
                    <label>Montreal East</label>
                    <label>
                        <input type="checkbox" name="location[]" value="MontrealWest">
                    </label>
                    <label>Montreal West</label>
                    <label>
                        <input type="checkbox" name="location[]" value="NearAirport">
                    </label>
                    <label>Near to the airport</label>
                    <label>
                        <input type="checkbox" name="location[]" value="DontCare">
                    </label>
                    <label>Don't care</label>
                    <br/>
                    <br/>
                </li>

                <li>
                    <label class="prompt">Price Range/per night:</label>
                    <select name = "Price" id="price">
                        <option value="50"> &lt;50$ </option>
                        <option value="100"> &lt;100$ </option>
                        <option value="150"> &lt;150$ </option>
                        <option value="idc"> no limit </option>

                    </select>
                    <br/>
                    <br/>
                </li>

                <li>
                    <label class="prompt">Number of Private Parkings</label><br/>
                    <label>
                        <input type="radio" name="parking" value="0">
                    </label>
                    <label>0</label>
                    <label>
                        <input type="radio" name="parking" value="1">
                    </label>
                    <label>1</label>
                    <label>
                        <input type="radio" name="parking" value="2">
                    </label>
                    <label>2</label>
                    <label>
                        <input type="radio" name="parking" value="3">
                    </label>
                    <label>3</label>
                    <label>
                        <input type="radio" name="parking" value="4">
                    </label>
                    <label>4</label>
                    <br/>
                    <br/>
                </li>

                <li>
                    <label class="prompt">Special Facilities</label><br/>
                    <label>
                        <input type="checkbox" name="facilities[]" value="Minibar">
                    </label>
                    <label>Minibar</label>
                    <label>
                        <input type="checkbox" name="facilities[]" value="Balcony">
                    </label>
                    <label>Balcony</label>
                    <label>
                        <input type="checkbox" name="facilities[]" value="Pool">
                    </label>
                    <label>Pool</label>
                    <label>
                        <input type="checkbox" name="facilities[]" value="WaterFront">
                    </label>
                    <label>Water Front</label>
                    <label>
                        <input type="checkbox" name="facilities[]" value="GardenFront">
                    </label>
                    <label>Garden Front</label>
                    <label>
                        <input type="checkbox" name="facilities[]" value="Brunch">
                    </label>
                    <label>Brunch</label>
                </li>
            </ul>
        </fieldset>
    </div>
    <fieldset id="suggestion">
        <legend>Expert Suggestion</legend>
        <ul>
            <li id="results"></li>
        </ul>
    </fieldset>
    <div id="searchResult">
        <p>Lets see what we can find ...</p>
        <input type="submit">
        <input type="reset" name ="Start Over"/>
    </div>
</form>
<?php
require "a4q3Foot.php";
?>