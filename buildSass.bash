file=""

if [ $1 -eq 1 ]
then
    file="base"
    outFile="light"
else
    file="secondary"
    outFile="dark"
fi

cd theme/ && node-sass src/module/base/$file.scss -o src/module/base/test.css

cp src/module/base/test.css/$file.css ../htdocs/css/$outFile.css && cd ..

cd htdocs/css && uglifycss $outFile.css > $outFile.min.css && rm $outFile.css && cd ..

