<?php
// Q1 変数と文字列
$name = "「安藤」";
$Myname = "私の名前は".$name."です。";
echo ($Myname);
// Q2 四則演算
$num = 5*4;
echo $num;
$num /= 2;
echo $num;

// Q3 日付操作
$timestamp = date("Y年m月d日 H時i分s秒", time());
echo "現在時刻は、".$timestamp."です。";
// Q4 条件分岐-1 if文
$davice = "mac";

if ($davice == "mac"||$davice =="windows"){
  echo "使用OSは、{$davice}です。";
}
else {
  echo "どちらでもありません。";
}
// Q5 条件分岐-2 三項演算子
$age = 17;
if ($age < 18) {
    $message = "未成年です。";
}
if ($age >= 18){
    $message = "成人です。";
}
echo $message;
// Q6 配列
$prefecture = ["茨城県","埼玉県","群馬県","栃木県","千葉県","神奈川県","東京都"];

echo "$prefecture[3]と$prefecture[4]は関東地方の都道府県です。";
// Q7 連想配列-1
$array = [
  "茨城県" => "水戸市",
  "埼玉県" => "さいたま市",
  "群馬県" => "前橋市",
  "栃木県" => "宇都宮市",
  "千葉県" => "千葉市",
  "神奈川県" => "横浜市",
  "東京都" => "新宿区"
];

foreach ($array as  $y) {
  echo  $y;
}
// Q8 連想配列-2
$array = [
  "茨城県" => "水戸市",
  "埼玉県" => "さいたま市",
  "群馬県" => "前橋市",
  "栃木県" => "宇都宮市",
  "千葉県" => "千葉市",
  "神奈川県" => "横浜市",
  "東京都" => "新宿区"
];

foreach ($array as $x => $y) {
    if($x == "埼玉県") {
      echo "{$x}の県庁所在地は、{$y}です。";
      break;
    }
}
// Q9 連想配列-3
$array = [
  "茨城県" => "水戸市",
  "埼玉県" => "さいたま市",
  "群馬県" => "前橋市",
  "栃木県" => "宇都宮市",
  "千葉県" => "千葉市",
  "神奈川県" => "横浜市",
  "東京都" => "新宿区"
];

$array["愛知県"] = "名古屋市";
$array["北海道"] = "札幌市";

foreach ($array as $x => $y) {
    if($x == "愛知県"||$x == "北海道") {
      echo "{$x}は関東地方ではありません。"."\n";
    }
      else {
      echo "{$x}の県庁所在地は、{$y}です。"."\n";
      }
}

// Q10 関数-1
function hello($name){
  echo $name."さん、こんにちは。";
}
hello("金谷");
hello("安藤");

// Q11 関数-2
function calcTaxInPrice($price){
    
  return $price * 1.1;
}

$price = 1000;
$taxinPrice = calcTaxInPrice($price);

echo "{$price}円の商品は税込価格は{$taxinPrice}です。";
// Q12 関数とif文
function distinguishNum ($number) {
    
  if ($number%2==1){
      return "{$number}は奇数です。";
  }
  else {
      return "{$number}は偶数です";
  }
}
$number = 3;
echo distinguishNum($number);

// Q13 関数とswitch文
function evaluateGrade($test) {

  switch ($test) {
      case 'A':
      case 'B':
          return '合格です'."\n";
          break;
  
      case 'C':
          return '合格ですが追加課題があります。'."\n";
          break;
  
      case 'D':
          return '不合格です。'."\n";
          break;
  
      default:
          return '判定不明です。講師に問い合わせてください。';
          break;
  }
  }
  
  echo evaluateGrade('A');
  echo evaluateGrade('あ');
?>
