
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
// // INI ADALAH CONTOH CONTAINER BOXDECORATION DENGAN SHAPE CIRCLE
// //=============================================
//    body: Container(
//     child: Container(
//             margin: EdgeInsets.all(50.0),
//             decoration: BoxDecoration(
//               shape: BoxShape.circle,
//               gradient: LinearGradient(
//                 begin: Alignment.topCenter,
//                 end: Alignment.bottomCenter,
//                 colors: [
//                   Color.fromARGB(255, 255, 0, 0),
//                   Colors.deepOrangeAccent,
//                   Colors.yellowAccent,
//                 ],
//               )
//             ),
//             child: Center(
//               child: Text(
//                 'Decoration: Box Decoration',
//                 style: TextStyle(
//                   fontSize: 15.0,
//                   fontWeight: FontWeight.bold,
//                   color: Colors.white,
//                 ),
//               ),
//             ),
//           ),
  

//   ),
//   ),
//   );
// }
// }

// //============================================
// //  INI ADALAH ROUTE BOTTONNYA 
// //============================================

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
