
<style>

    .pageChoix{
        padding:10px
    }
    .option_pageChoix{
        display:inline;
    }
    .pageChoix_acheterLouer{
        display:flex;
        padding:5px;
        justify-content: space-around;
        flex-direction: row; 
    }
</style>

<div class="pageChoixMainDiv" style="height:100px">
       <div class="pageChoix_acheterLouer" style='width: 100% '>
            <div class="pageChoix">
                <a href="../controllers/afficherAnnonce.php">
                    <button class='pushable'>
                    <span class='front'onmouseover="showMenu('menu buy')" onmouseout="hideMenu('menu buy')">
                            BUY <div class='option_pageChoix' id="menu buy" style='display : none;'>
                        <img src='../images/buy.svg'  style="width:auto; height:100%; max-height:36px" >
                    </div>
                        </span>
                    </button>
                </a>
            </div>

        <div class="pageChoix">
                <a href="../controllers/creerAnnonce.php"><button class='pushable'>
                    <span class='front'onmouseover="showMenu('menu sell')" onmouseout="hideMenu('menu sell')">
                            SELL <div class='option_pageChoix' id="menu sell" style='display : none;'>
                        <img src='../images/sell.svg'  style="width:auto; height:100%; max-height:36px" >
                    </div>
                    </span></button>
                </a>
            </div>
            <div class="pageChoix">
            <a href="../controllers/afficherMainPageBenevolat.php">
                    <button class='pushable'>
                    <span class='front'onmouseover="showMenu('menu book')" onmouseout="hideMenu('menu book')">
                            BOOKING <div class='option_pageChoix' id="menu book" style='display : none;'>
                        <img src="../images/book.svg"  style="width:auto; height:100%; max-height:36px" >
                    </div>
                    </button>
                </a></br>
            </div>
            
            <div class="pageChoix">
                <a href="../controllers/afficherLouer.php">
                    <button class='pushable'>
                        <span class='front' onmouseover="showMenu('menu rent')" onmouseout="hideMenu('menu rent')">
                            RENT <div class='option_pageChoix' id="menu rent" style='display : none;'>
                        <img src="../images/rent.svg"  style="width:auto; height:100%; max-height:36px" >
                    </div>
                    </button>
                </a>
            </div>
            </div>
</div>
</body>
</html>
