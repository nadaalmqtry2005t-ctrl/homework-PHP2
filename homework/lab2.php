<?php
echo "<pre>";
echo "
=============================================================
==================دوال المصفوفة ==================
=============================================================";
$numbers = [10, 50, 20, 40, 30, 10, 70, 80, 90, 100];
echo"<br>عناصر المصفوفة<br>";
foreach($numbers as $num){
    echo $num ."<br>";
}
// (1) count() : تحسب عدد عناصر المصفوفة
echo "عدد العناصر: " . count($numbers) . "<br>";
// (2) array_sum() : مجموع عناصر المصفوفة
echo "مجموع العناصر: " . array_sum($numbers) . "<br>";
// (3) array_product() : حاصل ضرب جميع العناصر
echo "حاصل ضرب العناصر: " . array_product($numbers) . "<br>";
// (4) array_unique() : إزالة القيم المكررة
echo "إزالة العناصر المكررة:<br>";
print_r(array_unique($numbers));
// (5) in_array() : التحقق من وجود عنصر
echo "هل الرقم 50 موجود؟ ";
echo in_array(50, $numbers) ? "نعم" : "لا";
echo "<br>";
// (6) array_search() : البحث عن موقع عنصر
echo "موقع الرقم 40: " . array_search(40, $numbers) . "<br>";
// (7) sort() : ترتيب تصاعدي
$temp = $numbers;
sort($temp);
echo "ترتيب تصاعدي:<br>";
print_r($temp);
// (8) rsort() : ترتيب تنازلي
$temp = $numbers;
rsort($temp);
echo "ترتيب تنازلي:<br>";
print_r($temp);
// (9) array_reverse() : عكس ترتيب المصفوفة
echo "عكس المصفوفة:<br>";
print_r(array_reverse($numbers));
// (10) array_slice() : قص جزء من المصفوفة
echo "اخذ 3 عناصر من البداية:<br>";
print_r(array_slice($numbers, 0, 3));
// (11) array_splice() : استبدال جزء من المصفوفة
$temp = $numbers;
array_splice($temp, 2, 2, [999, 888]);
echo "استبدال عنصرين:<br>";
print_r($temp);
// (12) array_merge() : دمج مصفوفتين
$extra = [200, 300];
echo"<br>2عناصر المصفوفة<br>";
foreach($extra as $value){
    echo $value ."<br>";
}
echo "دمج المصفوفة مع أخرى:<br>";
print_r(array_merge($numbers, $extra));
// (13) array_push() : إضافة عنصر للنهاية
$temp = $numbers;
array_push($temp, 500);
echo "إضافة 500 للنهاية:<br>";
print_r($temp);
// (14) array_pop() : حذف آخر عنصر
$temp = $numbers;
array_pop($temp);
echo "حذف آخر عنصر:<br>";
print_r($temp);
// (15) array_shift() : حذف أول عنصر
$temp = $numbers;
array_shift($temp);
echo "حذف أول عنصر:<br>";
print_r($temp);
// (16) array_unshift() : إضافة عنصر للبداية
$temp = $numbers;
array_unshift($temp, 111);
echo "إضافة 111 للبداية:<br>";
print_r($temp);
// (17) array_keys() : إرجاع المفاتيح
echo "مفاتيح المصفوفة:<br>";
print_r(array_keys($numbers));
// (18) array_values() : إرجاع القيم فقط
echo "القيم فقط:<br>";
print_r(array_values($numbers));
// (19) array_map() : تطبيق دالة على كل عنصر
echo "ضرب كل عنصر ×2:<br>";
print_r(array_map(fn($n) => $n * 2, $numbers));
// (20) array_filter() : تصفية العناصر الأكبر من 40
echo "العناصر الأكبر من 40:<br>";
print_r(array_filter($numbers, fn($n) => $n > 40));
echo"
=============================================================
===================  دوال النصوص  =================
=============================================================
";
$text="Hello PHP World 2025";
echo"النص ";
echo $text  ;
echo "<br>";
// (1) strlen() : حساب طول النص
echo "طول النص: " . strlen($text) . "<br>";
// (2) str_word_count() : عد الكلمات داخل النص
echo "عدد الكلمات: " . str_word_count($text) . "<br>";
// (3) strtoupper() : تحويل جميع الحروف إلى كبيرة
echo "تحويل الى أحرف كبيرة:<br>" . strtoupper($text) . "<br>";
// (4) strtolower() : تحويل جميع الحروف إلى صغيرة
echo "تحويل الى أحرف صغيرة:<br>" . strtolower($text) . "<br>";
// (5) ucfirst() : أول حرف كبير من الجملة
echo "أول حرف كبير:<br>" . ucfirst($text) . "<br>";
// (6) ucwords() : أول حرف كبير من كل كلمة
echo "أول حرف كبير لكل كلمة:<br>" . ucwords($text) . "<br>";
// (7) strrev() : عكس النص
echo "عكس النص:<br>" . strrev($text) . "<br>";
// (8) substr() : قص جزء من النص
echo "قص أول 5 حروف:<br>" . substr($text, 0, 5) . "<br>";
// (9) strpos() : البحث عن أول ظهور لكلمة
echo "موقع كلمة PHP:<br>" . strpos($text, "PHP") . "<br>";
// (10) strrpos() : البحث عن آخر ظهور لحرف
echo "آخر ظهور لحرف o:<br>" . strrpos($text, "o") . "<br>";
// (11) str_replace() : استبدال جزء من النص
echo "استبدال PHP بـ Code:<br>" . str_replace("PHP", "Code", $text) . "br";
// (12) str_repeat() : تكرار النص
echo "تكرار النص 3 مرات:<br>" . str_repeat($text, 3) . "<br>";
// (13) trim() : إزالة المسافات من الطرفين
$spaces = "   hello php   ";
echo "إزالة المسافات:<br>" . trim($spaces) . "<br>";
// (14) ltrim() : إزالة المسافات من اليسار
echo "إزالة مسافات اليسار:<br>" . ltrim($spaces) . "<br>";
// (15) rtrim() : إزالة المسافات من اليمين
echo "إزالة مسافات اليمين:<br>" . rtrim($spaces) . "<br>";
// (16) explode() : تحويل النص إلى مصفوفة
echo "تحويل النص إلى كلمات:<br>";
print_r(explode(" ", $text));
// (17) implode() : دمج مصفوفة إلى نص
$arr = ["Hello", "From", "PHP"];
echo "دمج مصفوفة إلى نص:<br>" . implode(" ", $arr) . "<br>";
// (18) strcmp() : مقارنة نصين
echo "مقارنة النصوص:<br>" . strcmp("Hello","Hello") . "<br>";
// (19) strncmp() : مقارنة أول عدد معين من الحروف
echo "مقارنة أول 3 حروف:<br>" . strncmp("Hello","Helicopter",3) . "<br>";
// (20) htmlspecialchars() : تحويل الرموز إلى HTML آمن
$code = "<b>Hello</b>";
echo "تحويل HTML إلى نص آمن:<br>" . htmlspecialchars($code) . "<br>";
?>
