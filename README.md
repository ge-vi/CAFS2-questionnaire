# CAFS2-questionnaire

## Savarankiškas darbas: Kelių/vieno puslapių testas [PHP]
    

 - Kiekviename puslapyje (galima ir AJAX viename puslapyje) yra klausimas/atsakymų rinkinys ir mygtukas „Toliau“;
 - Testą sudaro tam tikras klausimų/puslapių skaičius (minimum 3);
 - Paskutiniame puslapyje vartotojas turėtų gauti testo rezultatą;
 - Už teisingą atsakymą duodamas 1 taškas;
 - Uždarius naršyklę testo viduryje grįžus turėtų būti galimybė spręsti toliau.

Trumpai tariant reikia padaryti primityvią klausimų/atsakymų sistemą, kurią galima būtų naudoti atsiskaitymams.


P.S.

Panaudokite ankščiau sukurtą "FormBuilder" arba "Tag" klases.


---

ge-vi notes

`php artisan make:migration add_{{field_name}}_field_to_{{table_name}}_table`

alter table columns in migrate file

and run migrations:
`php artisan migrate`
