import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget{
  @override
  Widget build(BuildContext context){
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: MyHomePage(),
    );
  }
}

class MyHomePage extends StatelessWidget{
  @override
  Widget build(BuildContext context){
    return Scaffold(
      appBar: AppBar(
        title: Text('Belajar lagi flutter'),
      ),
      body: Container(
        color: Colors.yellow,
        margin: new EdgeInsets.all(15.0),
          child: Container(
            color: Colors.green,
            margin: new EdgeInsets.all(15.0),
              child: Container(
                color: Colors.pink,
                margin: new EdgeInsets.all(15.0),
                  child: Container(
                    color: Colors.white,
                    margin: new EdgeInsets.all(15.0),
                      child: Container(
                        color: Colors.black,
                        margin: new EdgeInsets.all(15.0),
                          child: Container(
                            color: Colors.grey,
                            margin: new EdgeInsets.all(15.0),
                              child: Container(
                                color: Colors.red,
                                margin: new EdgeInsets.all(15.0),
                                  child: Container(
                                    color: Colors.lightBlue,
                                    margin: new EdgeInsets.all(15.0),
                                      child: Container(
                                        color: Colors.purple,
                                        margin: new EdgeInsets.all(15.0),
                                          child: Container(
                                            color: Colors.orange,
                                            margin: new EdgeInsets.all(15.0),
                                              child: Container(
                                                color: Colors.cyan,
                                                margin: new EdgeInsets.all(15.0),
                                                  child: Container(
                                                    color: Colors.brown,
                                                    margin: new EdgeInsets.all(15.0),
          ),
          ),
          ),
          ),
          ),
          ),
          ),
          ),
          ),
          ),
        ),
      ),
      
      );
  }
}