import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
@override
Widget build(BuildContext context){
  return MaterialApp(
    debugShowCheckedModeBanner: false,
    home: Home(),
    );
}
}

class Home extends StatelessWidget{
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: new Center(child: new Text("Restfood")
        ),
        backgroundColor: Colors.orange,
        leading: Icon(Icons.fastfood,color: Colors.white),
      ),
    body: SingleChildScrollView(
      child: Container(
        padding: EdgeInsets.all(20),
        child: Column(crossAxisAlignment: CrossAxisAlignment.start,
        children: [
        Text(
          "Daftar Makanan & Minuman",
        style: TextStyle(
          fontSize: 18, color: Colors.orange,
          fontWeight: FontWeight.bold
        ),
        ),
        SizedBox(height: 20)
       ], 
      ),
    ),
    
    ),
    
    );
    
    }
}