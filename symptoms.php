<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disease Prediction System</title>
    <link rel="stylesheet" type="text/css" href="symptoms.css"/>
</head>

    <?php include("header.html")
    ?>

<body>
<div class="outer">    
  <div class="border">
    <div id="symptoms-form" class="symptoms-form">
        <h2 class="symptoms-header">SYMPTOMS</h2>
        <button class="symptoms-button" onclick="openpopup('Vitamin A deficiency','popup1')">Night blindness, Dry Eyes, Skin Problems</button>
        <button class="symptoms-button" onclick="openpopup('Vitamin B deficiency','popup2')">Fatigue, Muscle weakness, Nerve Damage, Swelling</button>
        <button class="symptoms-button" onclick="openpopup('Vitamin C deficiency','popup3')">Cracked lips, Sore throat, Red, Itchy eyes, Skin rashes</button>
        <button class="symptoms-button" onclick="openpopup('Iron deficiency','popup4')">Anemia, Nerve damage, Fatigue, Weakness</button>
        <button class="symptoms-button" onclick="openpopup('Vitamin D deficiency','popup5')">Joint and muscle pain, Swollen, Bleeding gums, Skin rashes</button>
        <button class="symptoms-button" onclick="openpopup('Calcium deficiency','popup6')">Weak bones, Muscle weakness, Fatigue, Impaired immune function</button>
        <button class="symptoms-button" onclick="openpopup('Vitamin E deficiency','popup7')">Nerve damage, Muscle weakness, Vision problems, Impaired immune function</button>
        <button class="symptoms-button" onclick="openpopup('Vitamin K deficiency','popup8')">Excessive bleeding and easy bruising, Hemorrhages, Delayed blood clotting</button>
    </div>
</div>
</div>


    <div class="popup" id="popup1">
        <h2>DISEASE</h2>
        <p>You are Having Vitamin A deficiency</p>
        <p>Suggested Food</p>
        <p>Carrots,Sweet potatoes,Spinach,Mangoes,Eggs</p>
        <button type="button" onclick="closepopup('popup1')">OK</button>
    </div>

    <div class="popup" id="popup2">
        <h2>Disease</h2>
        <p>You are Having Vitamin B deficiency</p>
        <p>Suggested Food</p>
        <p>Whole grains,Lean meats (chicken, turkey),Fish,Dairy products,Leafy green vegetables</p>
        <button type="button" onclick="closepopup('popup2')">OK</button>
    </div>

    <div class="popup" id="popup3">
        <h2>Disease</h2>
        <p>You are Having Vitamin C deficiency</p>
        <p>Suggested Food</p>
        <p>Citrus fruits (oranges, lemons),Strawberries,Bell peppers,Broccoli,Kiwi</p>
        <button type="button" onclick="closepopup('popup3')">OK</button>
    </div>

    <div class="popup" id="popup4">
        <h2>Disease</h2>
        <p>You are Having Iron deficiency</p>
        <p>Suggested Food</p>
        <p>Red meat,Beans,Lentils,Spinach,Fortified cereals</p>
        <button type="button" onclick="closepopup('popup4')">OK</button>
    </div>

    <div class="popup" id="popup5">
        <h2>Disease</h2>
        <p>You are Having Vitamin D deficiency</p>
        <p>Suggested Food</p>
        <p>Fatty fish (salmon, mackerel),Fortified dairy products,Egg yolks,Cod liver oil</p>
        <button type="button" onclick="closepopup('popup5')">OK</button>
    </div>

    <div class="popup" id="popup6">
        <h2>Disease</h2>
        <p>You are Having Calcium deficiency</p>
        <p>Suggested Food</p>
        <p>Dairy products (milk, cheese),Leafy green vegetables,Fortified plant-based milk (soy, almond),Tofu</p>
        <button type="button" onclick="closepopup('popup6')">OK</button>
    </div>

    <div class="popup" id="popup7">
        <h2>Disease</h2>
        <p>You are Having Vitamin E deficiency</p>
        <p>Suggested Food</p>
        <p>Nuts (almonds, sunflower seeds),Vegetable oils (sunflower, safflower),Spinach,Broccoli</p>
        <button type="button" onclick="closepopup('popup7')">OK</button>
    </div>

    <div class="popup" id="popup8">
        <h2>Disease</h2>
        <p>You are Having Vitamin K deficiency</p>
        <p>Suggested Food</p>
        <p>Leafy green vegetables (kale, spinach),Broccoli,Brussels sprouts,Fish (tuna, salmon)</p>
        <button type="button" onclick="closepopup('popup8')">OK</button>
    </div>


    <script>
        function openpopup(disease, popupId){
            let popup = document.getElementById(popupId);
            popup.querySelector('p').innerText = "You are Having " + disease;
            popup.classList.add("open-popup");
        }

        function closepopup(popupId){
            let popup = document.getElementById(popupId);
            popup.classList.remove("open-popup");
        }
    </script>
</body>

    <?php include("footer.html")
    ?>
</html>
