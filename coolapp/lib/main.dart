// import 'dart:developer';

// import 'package:flutter/material.dart';

// void main() {
//   runApp(MyApp());
// }

// class MyApp extends StatelessWidget {
// @override
// Widget build(BuildContext context){
//   return MaterialApp(
//     debugShowCheckedModeBanner: false,
//     title: "coolapp",
//     home: Scaffold(
//       appBar: AppBar(
//         title: Text("Latihan App Bar"),
//       ),
//       body: Center(
//         child: Material(
//           color: Colors.blue,
//           elevation: 8,
//           borderRadius: BorderRadius.circular(30),
//           clipBehavior: Clip.antiAliasWithSaveLayer,
//             child: InkWell(
//               splashColor: Colors.black26,
//               onTap: () {}, 
//               child: Row(
//                 mainAxisSize: MainAxisSize.min,
//                 children: [
//                   Ink.image(
//                 image: NetworkImage('https://pbs.twimg.com/media/FLFkaDVaQAEXD39.jpg:large'), 
//                 height: 80,
//                 width: 80,
//                 fit: BoxFit.cover,
//                 ),
//                 SizedBox(width: 6),
//                 Text(
//                   'Jihyo',
//                   style: TextStyle(fontSize: 32, color:Color.fromARGB(255, 206, 86, 126)),
//                 ),
//                 SizedBox(width: 6),
//       ],
//     ),
//     ),
//     ),
//     ),
//     ),
//     );
// }

// }


// ignore_for_file: prefer_const_constructors, use_key_in_widget_constructors

import 'package:flutter/material.dart';


void main() {
  runApp(MyApp());
  // home: FirstRoute(),
}

class MyApp extends StatelessWidget {
  @override
Widget build(BuildContext context){
  return MaterialApp(
    debugShowCheckedModeBanner: false,
    title: "SMK BPI BANDUNG",
    home: Scaffold(
      backgroundColor: Colors.pinkAccent,
      appBar: AppBar(
        leading: Icon(Icons.account_circle_rounded),
        backgroundColor: Colors.lightBlue,
        title: Text("TWICE MEMBERS"),
        
      ),
      body: Center(
        child: Material(
          color: Colors.blue,
          elevation: 8,
          borderRadius: BorderRadius.circular(30),
          clipBehavior: Clip.antiAliasWithSaveLayer,
            child: InkWell(
              splashColor: Colors.black26,
              onTap: (){Navigator.push(
        context,
        MaterialPageRoute(
          builder: (context) =>
              SecondRoute(),
        ),
      );
      },
              child: Row(
                mainAxisSize: MainAxisSize.min,
                children: [
                  Ink.image(
                image: NetworkImage('https://pbs.twimg.com/media/FLFkaDVaQAEXD39.jpg:large'), 
                height: 80,
                width: 80,
                fit: BoxFit.cover,
                ),
                SizedBox(width: 6),
                Text(
                  'Jihyo',
                  style: TextStyle(fontSize: 32, color:Color.fromARGB(255, 206, 86, 126)),
                ),
                SizedBox(width: 6),
      ],
    ),
    ),
    ),
    ),
  ),
  );
}
}

class SecondRoute extends StatelessWidget {
  const SecondRoute({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Second Route'),
      ),
      body: Center(
        child: ElevatedButton(
          onPressed: () {
            Navigator.pop(context);
          },
          child: const Text('Go back!'),
        ),
      ),
    );
  }
}