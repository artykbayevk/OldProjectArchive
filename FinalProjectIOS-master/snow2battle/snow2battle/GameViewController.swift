//
//  GameViewController.swift
//  snow2battle
//
//  Created by Yerbol on 25.04.16.
//  Copyright (c) 2016 Yerbol. All rights reserved.
//

import UIKit
import SpriteKit

class GameViewController: UIViewController {
    
//    var multiplayer = multiplayerManager()
//    var multiplayerGetData: String = ""
//    var multiplayerSendData: String = ""

    //let scene = GameScene(fileNamed: "GameScene")
    override func viewDidLoad() {
        super.viewDidLoad()

        if let scene = GameScene(fileNamed:"GameScene") {
            // Configure the view.
            let skView = self.view as! SKView
            skView.showsFPS = false
            skView.showsNodeCount = false
            scene.size = skView.bounds.size
            
            /* Sprite Kit applies additional optimizations to improve rendering performance */
            skView.ignoresSiblingOrder = true
            
            /* Set the scale mode to scale to fit the window */
            scene.scaleMode = .AspectFill
            
            skView.presentScene(scene)
        }
    }

    override func shouldAutorotate() -> Bool {
        return true
    }

    override func supportedInterfaceOrientations() -> UIInterfaceOrientationMask {
        if UIDevice.currentDevice().userInterfaceIdiom == .Phone {
            return .AllButUpsideDown
        } else {
            return .All
        }
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Release any cached data, images, etc that aren't in use.
    }
    
   

    override func prefersStatusBarHidden() -> Bool {
        return true
    }
//    func getMessage(message: String){
//        print("azazaza")
//        let data = message.characters.split{$0 == "/"}.map(String.init)
//        if(data[0]=="move"){
//            
//        }
//        if(data[0]=="shoot"){
//            
//            
//        }
//    }

}
//
//extension GameViewController: multiplayerManagerDelegate{
//    func connectedDevicesChanged(manager: multiplayerManager, connectedDevices: [String]) {
//        NSOperationQueue.mainQueue().addOperationWithBlock {
//            print("asddd")
//            if(connectedDevices.count>0){
//                print("Connection with \(connectedDevices)")
//            }
//            else{
//                print("Searching for opponent")
//            }
//            print("Connections: \(connectedDevices)")
//        }
//    }
//    func getMessage(manager: multiplayerManager, message: String) {
//        print("asd")
//        self.getMessage(message)
//    }
//}
