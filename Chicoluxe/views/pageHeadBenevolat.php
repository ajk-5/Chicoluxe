<style>
.pageChoix_acheterLouer{
        display:flex;
        padding:5px;
        justify-content:space-between;
        flex-direction: row; 
    }

</style>
<div style='display:flex; justify-content:center;  width=820px'>
    <span style= "font-size:36px; color:#ffffff ">BENEVOLAT</span>
</div>
    <div class="pageChoix_acheterLouer" style='width:820px auto; '>
            <div class="pageChoix">
                <a href="../controllers/afficherPageBenevolat.php">
                    <button class='pushable'>
                    <span class='front' style= width:380px>
                           VOIR LES BENEVOLATS
                        </span>
                    </button>
                </a>
            </div>

            <div class="pageChoix">
                <a href="../controllers/connectorBenevolat.php"><button class='pushable'>
                    <span class='front' style= width:380px>
                         DEMANDER|PROPOSER BENEVOLAT 
                    </span></button>
                </a>
            </div>
        </div>  
    </body>
</html>