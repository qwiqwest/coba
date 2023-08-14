import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatefulWidget{
  @override
  _MyAppState createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  int nomor = 0;

  @override
  Widget build(BuildContext context){
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: 
      Scaffold(
        appBar: AppBar(
          title: Text("Kurang Tambah"),
        ),
        body: Center(
          child: Column(
          mainAxisAlignment: MainAxisAlignment.spaceEvenly,
          children: [
            Column(
              mainAxisAlignment: MainAxisAlignment.spaceEvenly,
              children: [
                Text(nomor.toString(), style: TextStyle(fontSize: 20),
                ),
                SizedBox(height: 25),
                ElevatedButton(
                  onPressed: (){
                      setState(() {
                        nomor++;  
                      });
                    print(nomor);
                  },
                  child: Text("+ Tambah Bilangan")
                  ),
                  SizedBox(height: 25),
                  ElevatedButton(
                  onPressed: (){
                    if(nomor != 0){
                    setState(() {
                        nomor--;  
                      });
                    }
                    print(nomor);
                  },
                  child: Text("- Kurangi Bilangan")
                  ),
                  SizedBox(height: 25),
                  ElevatedButton(
                  onPressed: (){
                    setState(() {
                        nomor = 0;  
                      });
                    print(nomor);
                  },
                  child: Text("Reset Bilangan")
                  ),
              ],
            )
          ],
        ),
        ),
        ),
      );
  }
}