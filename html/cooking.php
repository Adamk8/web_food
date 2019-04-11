<!DOCTYPE html5>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Food App">
    <meta name="author" content="Adam Kwan">
    <title>Home Cooking</title>
    <link rel="stylesheet" type="text/css" href= "../css/styles.css"/>
    <script src="../js/collapse.js"></script>
</head>
<body>
    <div class="cooking">
        <header>Home Cooking</header>
        <p> On this page you can find some recipes as well as get a randomly selected meal plan
        </p>

        <div class="section"> 
            <h1>Less than 30 Minutes</h1>
            <button class="collapse">Burritos</button>
            <div class="content">
                This can be chicken/beef/turkey burritos with some peppers, tomatoes
                salsa, sour cream, cheese, rice, and anthing else you want to add.
            </div>
            <button class="collapse">Spaghetti Carbonara</button>
            <div class="content">
               This meal is very simple requiring only spaghetti, 
               bacon, eggs, garlic, and parmesan. To add to this you can always 
               throw a few vegtables in for extra variety. 
            </div>
            <button class="collapse">Tortellini/Ravioli</button>
            <div class="content">
               This is for the days when you really don't feel like cooking 
               so you just throw the pasta on to boil and mix it with some sauce.
               You can also make a salad on the side while the pasta is boiling to
                make it a complete meal.
            </div>
        </div>

        <div class="section"> 
            <h1>Cook Once and Eat for Days</h1>
            <button class="collapse">Fried Rice</button>
            <div class="content">
                With chicken or beef, make some rice in chicken broth
                for some extra flavour, scramble an egg, and a bag of frozen vegtables
                of your choice. 
            </div>
            <button class="collapse">Stir Fry</button>
            <div class="content">
                With a meat of your choice, fry it with vegtables, some noodles,
                and a sauce. The amount is limited to the size of your pan.
            </div>
        </div>

        <div class="section"> 
            <h1>Set it, Forget it, Eat it</h1>
            <button class="collapse">Pulled Pork</button>
            <div class="content">
                Put some pork shoulder in the instant pot with broth and cider and 
                you get pulled pork in 30-50 minutes depending on how much you make.
                Make a salad or some vegtables on the side and server pork on some buns.
            </div>
            <button class="collapse">Beef Dip</button>
            <div class="content">
                Grab some beef chuck roast and combine it with beef broth, 
                onions and french onion soup and in under an hour you'll have some 
                nice tender beef and good dip for it.
            </div>
        </div>

        <div class="section"> 
            <h1>More of the sit down kinda food</h1>
            <button class="collapse">Pork Chops and Potatoes</button>
            <div class="content">
                Season you pork chops however you like and if you want them juciy fry with garlic and butter
                for 3-4  a side then let them sit for 8-10 minutes. Serve with potatoes made by your desired method.
            </div>
            <button class="collapse">Chicken Milanese</button>
            <div class="content">
                A breaded and stuffed chicken breast served with some spaghetti on the side. Add a little cayenne pepper for extra flavour.
            </div>
            <button class="collapse">Chicken Parmesan</button>
            <div class="content">
                More traditional than the Milanese with a breaded chicken breast topped with marinara sauce and mozzarella. Served with spaghetti.
            </div>
            <button class="collapse">Sausage, peppers, and Pasta</button>
            <div class="content">
                Relatively simple but tastes good. Boil some pasta (Penne or Rigatoni reccomended), fry some sliced sausages, sautee some peppers with salt and sugar. Mix together and add red wine vinegar to sweeten the whole dish.
            </div>
        </div>

        <button class="mealplan" onclick="openForm()" id="mealbtn">Make a Meal Plan</button>
        <div class="formpopup" id="meal-prep-form">
            <form action="../php/generate-meal-plan.php" method="post" class="meal-form-conainer">
                <h1>Choose Meal Types</h1>
                <input type="number" name="quickmeals" placeholder="# of Quick Meals"><br>
                <input type="number" name="mealpreps" placeholder="# of Meal Prep"><br>
                <input type="number" name="pots" placeholder="# of Crockpot Style Meals"><br>
                <input type="number" name="fancy" placeholder="# of Sit Down Meals"><br>
                <button id="generate" type="submit">Generate Meal Plan</button><br>
                <button type="button" class="cancel" onclick="closeForm()">Cancel</button> <br>
            </form>    
        </div>
  
        <footer>
            <button class="back" onclick="window.location.href='../index.html'" > Home</button><br>
            Note: This page is more for ideas not strict recipes. 
        </footer>
    </div>
</body>
    

    <script>
        function openForm() {
        document.getElementById("meal-prep-form").style.display = "block";
        document.getElementById("mealbtn").style.display = "none";
        }

        function closeForm() {
        document.getElementById("meal-prep-form").style.display = "none";
        document.getElementById("mealbtn").style.display = "initial";
        }
    </script>
    <script>
        var coll = document.getElementsByClassName("collapse");
        var i;
        
        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
          });
        }
    </script>
</html>