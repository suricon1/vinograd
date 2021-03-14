<br>
<div class="card">
    <h4 class="card-header">С помощью данного калькулятора вы сможете рассчитать необходимый сахар в вине.</h4>
{{--    <div class="card-header">--}}
{{--        <h4>С помощью данного калькулятора вы сможете рассчитать необходимый сахар в вине.</h4>--}}
{{--    </div>--}}
    <div class="card-body">
        <form name="calc" onsubmit="return false;">
            <div class="container-fluid">
                <div class="form-group row">
                    <label for="input1" class="col-sm-8 col-form-label text-sm-right">Текущий уровень сахара:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="input1" name="txtcurrentbrix" value="19"
                               onchange="javascript: updateAll();">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input2" class="col-sm-8 col-form-label text-sm-right">Необходимый уровень сахара:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="input2" name="txtdesiredbrix" value="23"
                               onchange="javascript: updateAll();">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input3" class="col-sm-8 col-form-label text-sm-right">Объем готового вина: (литры)</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="input3" name="txtwinevolume" value="30"
                               onchange="javascript: updateAll();">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Обновить</button>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8 text-sm-right"><strong>Необходимо добавить сахара:</strong></div>
                    <div class="col-sm-4" id="divSugar" style="font-size: 170%;">1.34 кг</div>
                </div>
            </div>
        </form>
    </div>
</div>
<br>
{{--<script type="text/javascript">--}}
{{--    eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('7 h=19;7 j=O;7 p=Y;7 q;e A(){h=f.k.N.z;j=f.k.Q.z;p=f.k.R.z;q=f.V(\'q\')}e t(){$(\'.u K[E=D]\').P(e(){$(F).H($(F).H().S(/,/g,"."))});4(!I()){6 8}w()}e w(){7 a=j-h;7 b=(((p*1.5*a)/16)*0.1e)/3.T;7 c=(b-(v.X(b)))*16;7 d=b;q.Z=L(d,2)+" кг "}e I(){A();4(!r(h)){o(\'Текущий брикс указан в неверном формате. Данные необходимо вводить цифрами, а дробные числа через точку, например: 2.2\');6 8}4(!r(j)){o(\'Необходимый брикс указан в неверном формате. Данные необходимо вводить цифрами, а дробные числа через точку, например: 2.2\');6 8}4(!r(p)){o(\'Объем готового вина указан в неверном формате. Данные необходимо вводить цифрами, а дробные числа через точку, например: 2.2\');6 8}4(h>=j){o(\'Ваш текущий Брикс равен или превышает ваш необходимый Брикс, поэтому сахар добавлять не требуется!\');6 8}6 y}e r(s){4(s===m){6 8}4(s===0){6 y}4(s==\'\'){6 8}4(M(s)){6 8}7 i;G(i=0;i<s.B;i++){7 c=s.U(i);4(!((c>="0")&&(c<="9"))&&c!=\'.\'){6 8}}6 y}e L(n,a){4(n===m){6 8}4(n===\'\'){6 8}4(M(n)){6 8}4(a<0){6 8}4(a>10){6 8}7 b=v.W(n*v.J(10,a))/v.J(10,a);7 c=(b+"").C(".");4(c==0){b="0"+b;c=1}4(a!=0){c=(b+"").C(".");4(c==-1||c==b.B-1){b+="."}}c=(b+"").C(".");7 d=((b+"").B-1)-c;4(d<a){G(x=d;x<a;x++){b+="0"}}6 b}e 11(){f.k.12();A();w()}7 l=m;$(f).14(e(){$(".u .k-15").17(t);$(\'.u K[E=D]\').18(e(){4(l!=m){1a(l)}l=1b(e(){l=m;t()},1c)});$(".u 1d").13(t)});',62,77,'||||if||return|var|false||||||function|document||currentBrix||desiredBrix|calc|globalTimeout|null||alert|wineVolume|divSugar|isNumber||updateAll|calculate|Math|recalculate||true|value|setVars|length|lastIndexOf|text|type|this|for|val|checkInput|pow|input|rounddecimal|isNaN|txtcurrentbrix|23|each|txtdesiredbrix|txtwinevolume|replace|78541|charAt|getElementById|round|floor|30|innerHTML||resetform|reset|change|ready|but||click|keyup||clearTimeout|setTimeout|500|select|45'.split('|'),0,{}))--}}
{{--</script>--}}
