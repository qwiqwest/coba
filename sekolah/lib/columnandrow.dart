// import 'package:flutter/material.dart';

// void main() {
//   runApp(MyApp());
// }

// class MyApp extends StatelessWidget {
//   @override
// Widget build(BuildContext context){
//   return MaterialApp(
//     debugShowCheckedModeBanner: false,
//     title: "SMK BPI BANDUNG",
//     home: Scaffold(
//       backgroundColor: Colors.blueAccent,
//       appBar: AppBar(
        
//         leading: Icon(Icons.account_circle_rounded, color: Colors.black),
        
//         actions: [
//           IconButton(
//             icon: Icon(
//               Icons.arrow_circle_right_outlined,
//               color: Colors.black
//               ),
//           onPressed: (){
//             Navigator.push(context, MaterialPageRoute(builder: (context) => SecondRoute()),
//             );
//           },
//           )
//         ],

//         backgroundColor: Colors.white,
//         title: Text("Latihan App Bar", 
//         style: TextStyle(color: Colors.black)),
//       ),

// //=============================================
// //INI ADALAH CONTOH COLUMN DAN ROW
// //=============================================

//       body: Column(
//         crossAxisAlignment: CrossAxisAlignment.start,
//         children: [
//           Container(
//             color: Colors.blueAccent,
//             child: FlutterLogo(
//               size: 60.0,
//             ),
//           ),
//           Container(
//             color: Colors.greenAccent,
//             child: FlutterLogo(
//               size: 60.0,
//             ),
//           ),
//           Container(
//             color: Colors.redAccent,
//             child: FlutterLogo(
//               size: 60.0,
//             ),
//           ),
//           new Row(
//           mainAxisAlignment: MainAxisAlignment.end,
//         children: [
//           Container(
//             color: Colors.blueAccent,
//             child: FlutterLogo(
//               size: 60.0,
//             ),
//           ),
//           Container(
//             color: Colors.greenAccent,
//             child: FlutterLogo(
//               size: 60.0,
//             ),
//           ),
//           Container(
//             color: Colors.redAccent,
//             child: FlutterLogo(
//               size: 60.0,
//             ),
//           ),
      
//         ],
      
//       ),
//         ],
//   ),
//   ),
//   );
// }
// }

//============================================
//  INI ADALAH ROUTE BOTTONNYA 
//============================================


// class SecondRoute extends StatelessWidget {
 
//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//       appBar: AppBar(
//         title: const Text('Second Route'),
//         backgroundColor: Colors.pinkAccent,
//       ),
//       body: Center(
//         child: ElevatedButton(
         
//           onPressed: () {
//             Navigator.push(context, MaterialPageRoute(builder: (context) => MyApp()),
//             );
//           },
//           child: Text('Go back!'),
//       ),
//     ),
//     );
//   }
// }