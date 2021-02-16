

<?php
 
$annualExpenses = [
 "vacations" => 1000,
 "carRepairs" => 1000, 
];
$monthlyExpenses = [
 "rent" => 1500,
 "utilities" => 200,
 "healthInsurance" => 200
];
$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;
//$incomeSegments = [9700, 0.88],[29775, 0.78],[8675,0.76];
//--------------------------
// Write your code below:
//Q1:
$incomeSegments = [
 "one" => [
 "income" => 9700,
 "tax" => 0.88
 ],
 "two" => [
 "income" => 29775,
 "tax" => 0.78
 ],
 "three" => [
 "income" => 8675,
 "tax" => 0.76
 ]
 ];
foreach ($incomeSegments as $arraytwo) {
 $netInc = $arraytwo["income"] * $arraytwo["tax"]; 
echo "$netInc \n";
}
//Q1- alt 2:
//$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);
//print_r ($incomeSegments["one"]["income"]* );
//----------------
//Q2:
//alt1:
//$annualIncome = $netInc - $socialSecurity; 
//or alt2:
$netInc -=$socialSecurity;
$annualIncome = $netInc;
echo "$annualIncome\n";
//-----------------------------------
//Q4:
$monthlyIncome = $annualIncome/12;
echo "'WOOHOO $monthlyIncome SALARY'\n"; 
//-----------------------------------
//Q6:
$weeklyIncome = $monthlyIncome / 4.33;
echo $weeklyIncome;
//-----------------------------------
//Q7:
$weeklyExpenses = [
 "gas" => 25,
 "food" => 90,
 "entertainment" => 47,
];
foreach ($weeklyExpenses as $expenseItems) {
 $weeklyIncome -= $expenseItems;
}
echo "$weeklyIncome\n";
//----------------------
//Q3:
//$newIncome = $annualIncome - ($annualExpenses["vacations"] + $annualExpenses["carRepairs"]);
$annualIncome -= ($annualExpenses["vacations"] + $annualExpenses["carRepairs"]);
echo "$annualIncome \n";
//---------------------
//Q5:
foreach ($monthlyExpenses as $expenseItems) {
$monthlyIncome -= $expenseItems;
} 
echo $monthlyIncome;
//----------------

    
