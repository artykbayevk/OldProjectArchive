//
//  StartPageScene.swift
//  snow2battle
//
//  Created by Yerbol on 28.04.16.
//  Copyright © 2016 Yerbol. All rights reserved.
//

import Foundation
import SpriteKit

class StartPageScene: SKScene{
    let playbutton = []
    override func didMoveToView(view: SKView) {
        super.didMoveToView(view)
        var scene  = GameScene(fileNamed: "GameScene")
        let skView = self.view! as SKView
        skView.ignoresSiblingOrder = true
        scene!.scaleMode = .ResizeFill
        scene!.size = skView.bounds.size
        skView.presentScene(scene)
    }
    
    override func touchesBegan(touches: Set<UITouch>, withEvent event: UIEvent?) {
        var scene  = GameScene(fileNamed: "GameScene")
        let skView = self.view! as SKView
        skView.ignoresSiblingOrder = true
        scene!.scaleMode = .ResizeFill
        scene!.size = skView.bounds.size
        skView.presentScene(scene)
    }
    
    override func update(currentTime: NSTimeInterval) {
        
        
    }
    
}


