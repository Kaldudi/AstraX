import 'dart:io';
import 'package:flutter/foundation.dart';
import 'package:flutter/material.dart';
import 'package:webview_flutter/webview_flutter.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'X Twitter Web App',
      theme: ThemeData(
        colorScheme: ColorScheme.fromSeed(seedColor: Colors.blue),
        useMaterial3: true,
      ),
      home: const WebViewPage(),
      debugShowCheckedModeBanner: false,
    );
  }
}

class WebViewPage extends StatefulWidget {
  const WebViewPage({super.key});

  @override
  State<WebViewPage> createState() => _WebViewPageState();
}

class _WebViewPageState extends State<WebViewPage> {
  late final WebViewController controller;
  bool isSupported = true;

  @override
  void initState() {
    super.initState();
    
    // Check if the current platform is supported by webview_flutter
    if (kIsWeb) {
        // Web is supported because we added webview_flutter_web
        isSupported = true;
    } else if (Platform.isAndroid || Platform.isIOS) {
        isSupported = true;
    } else {
        isSupported = false;
    }

    if (isSupported) {
      String targetUrl = 'http://10.0.2.2/X_Twitter/public/';
      if (kIsWeb) {
        targetUrl = 'http://localhost/X_Twitter/public/';
      }

      controller = WebViewController();
      
      if (!kIsWeb) {
        controller
          ..setJavaScriptMode(JavaScriptMode.unrestricted)
          ..setBackgroundColor(const Color(0x00000000))
          ..setNavigationDelegate(
            NavigationDelegate(
              onProgress: (int progress) {},
              onPageStarted: (String url) {},
              onPageFinished: (String url) {},
              onWebResourceError: (WebResourceError error) {},
            ),
          );
      }

      controller.loadRequest(Uri.parse(targetUrl));
    }
  }

  @override
  Widget build(BuildContext context) {
    if (!isSupported) {
       return Scaffold(
         body: Center(
           child: Text(
             "WebView is not supported on this platform.\nPlease run this app on an Android emulator or device.",
             textAlign: TextAlign.center,
             style: TextStyle(fontSize: 18),
           )
         )
       );
    }

    // Scaffold without AppBar to make it look like a native app
    return Scaffold(
      body: SafeArea(
        child: WebViewWidget(controller: controller),
      ),
    );
  }
}
