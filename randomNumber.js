function randomNumber() {
	var randomValueStre = Math.floor(Math.random()*15) + 3;
    $("#stre").val(randomValueStre);
	var randomValueAgi = Math.floor(Math.random()*15) + 3;
    $("#agi").val(randomValueAgi);
	var randomValueInte = Math.floor(Math.random()*15) + 3;
    $("#inte").val(randomValueInte);
	var randomValueConst = Math.floor(Math.random()*15) + 3;
    $("#const").val(randomValueConst);
	var randomValueWis = Math.floor(Math.random()*15) + 3;
    $("#wis").val(randomValueWis);
	var randomValueCharisma = Math.floor(Math.random()*15) + 3;
    $("#car").val(randomValueCharisma);
}