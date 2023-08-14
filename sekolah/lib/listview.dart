import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
Widget build(BuildContext context){
  return MaterialApp(
    debugShowCheckedModeBanner: false,
    title: "SMK BPI BANDUNG",
    home: Scaffold(
      backgroundColor: Colors.blueAccent,
      appBar: AppBar(
        
        leading: Icon(Icons.account_circle_rounded, color: Colors.black),
        
        actions: [
          IconButton(
            icon: Icon(
              Icons.arrow_circle_right_outlined,
              color: Colors.black
              ),
          onPressed: (){
            Navigator.push(context, MaterialPageRoute(builder: (context) => SecondRoute()),
            );
          },
          )
        ],

        backgroundColor: Colors.white,
        title: Text("Latihan App Bar", 
        style: TextStyle(color: Colors.black)),
      ),

      //=============================================
// INI ADALAH CONTOH TEXT WIDGET
//=============================================

  // body: Center(
  //   child: Text("RPL SMK BPI BANDUNG",
  //   style: TextStyle(fontWeight: FontWeight.bold, color: Colors.yellow),
  //   ),
  // ),

//=============================================
// INI ADALAH CONTOH LISTVIEW
//=============================================
body: ListView(
  padding: const EdgeInsets.all(8),
  children: <Widget>[
    Container(
      height: 50,
      color: Colors.black,
      child: const Center(child: Text('Entry A', style: TextStyle(color: Colors.white))),
    ),
    Container(
      height: 50,
      color: Color.fromARGB(255, 75, 65, 34),
      child: const Center(child: Text('Entry B', style: TextStyle(color: Colors.white))),
    ),
    Container(
      height: 50,
      color: Color.fromARGB(137, 56, 20, 20),
      child: const Center(child: Text('Entry C', style: TextStyle(color: Colors.white))),
    ),
  ],
),
),
);
}
}

//============================================
//  INI ADALAH ROUTE BOTTONNYA 
//============================================


class SecondRoute extends StatelessWidget {
 
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Second Route'),
        backgroundColor: Colors.pinkAccent,
      ),
      body: Center(
        child: ElevatedButton(
         
          onPressed: () {
            Navigator.push(context, MaterialPageRoute(builder: (context) => MyApp()),
            );
          },
          child: Text('Go back!'),
      ),
    ),
    );
  }
}