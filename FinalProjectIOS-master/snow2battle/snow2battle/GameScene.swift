//
//  GameScene.swift
//  snow2battle
//
//  Created by Yerbol on 25.04.16.
//  Copyright (c) 2016 Yerbol. All rights reserved.
//

import SpriteKit


class GameScene: SKScene {
//    
//    var multiplayer = multiplayerManager()
//    var multiplayerGetData: String = ""
//    var multiplayerSendData: String = ""
//    

    let players = [SKSpriteNode(imageNamed: "myPlayer"), SKSpriteNode(imageNamed: "myPlayer"), SKSpriteNode(imageNamed: "myPlayer")]
    let bplayers = [SKSpriteNode(imageNamed: "bPlayer"), SKSpriteNode(imageNamed: "bPlayer"), SKSpriteNode(imageNamed: "bPlayer")]

    let gameTitle = SKLabelNode(fontNamed: "Chalkduster")
    let gameText2 = SKLabelNode(fontNamed: "HelveticaNeue-Light")
    
    var snowballs = [SKShapeNode]()
    var bsnowballs = [SKShapeNode]()
    var bloods = [SKSpriteNode]()
    
    var selected = [UITouch:SKSpriteNode]()
    var bselected = [UITouch:SKSpriteNode]()
    
    var walkImageIndex = [0,0,0]
    var bWalkImageIndex = [0,0,0]
    var stayImageIndex = [0,0,0]
    var bstayImageIndex = [0,0,0]
    let bloodImage = ["blood1","blood2","blood3"]
    
    var gameStarted = false
    var gameStartPressed = false
    
    var myPlayerStayingAnimation = [SKTexture]()
    var lasttime = CFTimeInterval(0)
    var millitime = CFTimeInterval(0)
    var presstime = [UITouch: CFTimeInterval]()
    
    var health = [20,20,20]
    var bhealth = [20,20,20]
    
    
    
    override func didMoveToView(view: SKView) {
        var dist = 0
        gameTitle.fontSize = 45
        gameTitle.text="Snow2Battle"
        gameTitle.fontColor = UIColor(red: 0.9, green: 0.7, blue: 0.3, alpha: 1)
        gameTitle.position = CGPoint(x:CGRectGetMidX(self.frame),y : CGRectGetMidY(self.frame)-10)
        gameTitle.zPosition=2
        gameText2.fontSize = 20
        gameText2.text = "Tap screen to start"
        gameText2.fontColor = UIColor(red: 1, green: 0.3, blue: 0.3, alpha: 1)
        gameText2.position = CGPoint(x:CGRectGetMidX(self.frame),y : CGRectGetMidY(self.frame)-40)
        gameText2.zPosition = 2
        self.addChild(gameTitle)
        self.addChild(gameText2)
        let background = SKSpriteNode(imageNamed: "back")
        background.position.x = CGRectGetMidX(self.frame)
        background.position.y = CGRectGetMidY(self.frame)
        background.size.width = CGRectGetWidth(self.frame)
        background.zPosition=1
        self.addChild(background)
        for player in self.players {
            player.position.x = CGRectGetMidX(self.frame) - 100 + CGFloat(dist)
            player.position.y = CGRectGetMidY(self.frame) - 100
            player.size.width = CGRectGetWidth(self.frame)/5.0
            player.size.height = player.size.width
            player.physicsBody = SKPhysicsBody(circleOfRadius: player.size.width/2)
            player.physicsBody?.affectedByGravity=false
            player.physicsBody?.dynamic = true
            player.zPosition=10
            dist+=100
            self.addChild(player)
        }
        dist=0
        for player in self.bplayers {
            player.position.x = CGRectGetMidX(self.frame) - 100 + CGFloat(dist)
            player.position.y = CGRectGetMidY(self.frame) + 100
            player.size.width = CGRectGetWidth(self.frame)/5.0
            player.size.height = player.size.width
            player.physicsBody = SKPhysicsBody(circleOfRadius: player.size.width/2)
            player.physicsBody?.affectedByGravity=false
            player.physicsBody?.dynamic = true
            player.zPosition=10
            dist+=100
            self.addChild(player)
        }
        
    }
    
    override func touchesBegan(touches: Set<UITouch>, withEvent event: UIEvent?) {
        gameStartPressed = true
        gameTitle.removeFromParent()
        gameText2.removeFromParent()
        if(gameStarted){
            for touch in touches {
                presstime[touch] = millitime
                for player in self.players{
                    let index = players.indexOf(player)
                    if(health[index!]>0){
                        if(player.containsPoint(CGPoint(
                            x: touch.locationInView(self.view).x,
                            y: (self.view?.bounds.height)! - touch.locationInView(self.view).y))){
                                self.selected[touch] = player
                        }
                    }
                    
                }
                for player in self.bplayers{
                    let index = bplayers.indexOf(player)
                    if(bhealth[index!]>0){
                        if(player.containsPoint(CGPoint(
                            x: touch.locationInView(self.view).x,
                            y: (self.view?.bounds.height)! - touch.locationInView(self.view).y))){
                                self.bselected[touch] = player
                        }
                    }
                    
                }
            }

        }
    }
    
    override func touchesMoved(touches: Set<UITouch>, withEvent event: UIEvent?) {
        for touch in touches {
            if (self.selected[touch] != nil){
                self.selected[touch]!.position = CGPoint(
                    x: touch.locationInView(self.view).x,
                    y: (self.view?.bounds.height)! - touch.locationInView(self.view).y + 25)
                let index = players.indexOf(self.selected[touch]!)
                self.walkImageIndex[index!]%=8
                if walkImageIndex[index!]==0 {walkImageIndex[index!]=1}
                self.selected[touch]!.texture = SKTexture(imageNamed: "myPlayerWalk\(walkImageIndex[index!])")
                self.walkImageIndex[index!]+=1
                

                
//                multiplayer.sendMessage("move/\(players.indexOf(selected[touch]!)!)/\(selected[touch]!.position.x)/\(selected[touch]!.position.y)")
            }
            if (self.bselected[touch] != nil){
                self.bselected[touch]!.position = CGPoint(
                    x: touch.locationInView(self.view).x,
                    y: (self.view?.bounds.height)! - touch.locationInView(self.view).y - 25)
                let index = bplayers.indexOf(self.bselected[touch]!)
                self.bWalkImageIndex[index!]%=8
                if bWalkImageIndex[index!]==0 {bWalkImageIndex[index!]=1}
                self.bselected[touch]!.texture = SKTexture(imageNamed: "bPlayerWalk\(bWalkImageIndex[index!])")
                self.bWalkImageIndex[index!]+=1
            }
        }
    }
    
    override func touchesEnded(touches: Set<UITouch>, withEvent event: UIEvent?) {
        for touch in touches{
            if(presstime[touch] != nil){
                if(millitime-presstime[touch]!<0.5){
                    if(gameStarted){
                        if(selected[touch] != nil){
                            let player = selected[touch]
                            var myPlayerAnimation = [SKTexture]()
                            let myPlayerAtlas = SKTextureAtlas(named: "myPlayerShoot")
                            for index in 1...myPlayerAtlas.textureNames.count{
                                myPlayerAnimation += [myPlayerAtlas.textureNamed("myPlayerShoot\(index)")]
                            }
                            let animation = SKAction.animateWithTextures(myPlayerAnimation, timePerFrame: 0.03)
                            player!.runAction(animation)
                            self.snowballs.append(SKShapeNode(circleOfRadius: player!.size.width/10))
                            self.snowballs.last?.fillColor = UIColor(red: 0.95, green: 0.95, blue: 1, alpha: 1)
                            self.snowballs.last?.position = CGPoint(x: player!.position.x, y: player!.position.y+21)
                            self.snowballs.last?.physicsBody = SKPhysicsBody(circleOfRadius: player!.size.width/10)
                            self.snowballs.last?.physicsBody?.affectedByGravity = false
                            self.snowballs.last?.zPosition=10
                            self.addChild(self.snowballs.last!)
                        }
                        if(bselected[touch] != nil){
                            let player = bselected[touch]
                            var myPlayerAnimation = [SKTexture]()
                            let myPlayerAtlas = SKTextureAtlas(named: "bPlayerShoot")
                            for index in 1...myPlayerAtlas.textureNames.count{
                                myPlayerAnimation += [myPlayerAtlas.textureNamed("bPlayerShoot\(index)")]
                            }
                            let animation = SKAction.animateWithTextures(myPlayerAnimation, timePerFrame: 0.03)
                            player!.runAction(animation)
                            self.bsnowballs.append(SKShapeNode(circleOfRadius: player!.size.width/10))
                            self.bsnowballs.last?.fillColor = UIColor(red: 0.7, green: 0.7, blue: 0.8, alpha: 1)
                            self.bsnowballs.last?.position = CGPoint(x: player!.position.x, y: player!.position.y+21)
                            self.bsnowballs.last?.physicsBody = SKPhysicsBody(circleOfRadius: player!.size.width/10)
                            self.bsnowballs.last?.physicsBody?.affectedByGravity = false
                            self.bsnowballs.last?.zPosition=10
                            self.addChild(self.bsnowballs.last!)
                        }
                        
                    }
                    
                }
            }
        }
    }
    
//        for player in players{
//            print(myPlayerStayingAnimation)
//            let animation = SKAction.animateWithTextures(myPlayerStayingAnimation, timePerFrame: 0.1)
//            player.runAction(animation)
//        }
//    func getMessage(message: String){
//        print("azazaza")
//        let data = message.characters.split{$0 == "/"}.map(String.init)
//        let index = Int(data[1])
//        if(data[0]=="move"){
//            self.players[index!].position.x = CGFloat(Float(data[2])!)
//            self.players[index!].position.y = CGFloat(Float(data[3])!)
//        }
//        if(data[0]=="shoot"){
//            
//            
//        }
//    }
    
    override func update(currentTime: CFTimeInterval) {

        millitime = currentTime
        if(currentTime-lasttime>1){
            lasttime=currentTime
            for player in players{
                let index = players.indexOf(player)
                if (health[index!]>0){
                    let randomvar = Int(arc4random_uniform(UInt32(3)))
                    if (Int(lasttime)%3 == randomvar){
                        var myPlayerAnimation = [SKTexture]()
                        let myPlayerAtlas = SKTextureAtlas(named: "myPlayerStay")
                        for index in 1...myPlayerAtlas.textureNames.count{
                            myPlayerAnimation += [myPlayerAtlas.textureNamed("myPlayerStay\(index)")]
                        }
                        let animation = SKAction.animateWithTextures(myPlayerAnimation, timePerFrame: 0.1)
                        player.runAction(animation)
                    }
                }
                
            }
            for player in bplayers{
                let index = bplayers.indexOf(player)
                if (bhealth[index!]>0){
                    let randomvar = Int(arc4random_uniform(UInt32(5)))
                    if (Int(lasttime)%5 == randomvar){
                        var myPlayerAnimation = [SKTexture]()
                        let myPlayerAtlas = SKTextureAtlas(named: "bPlayerStay")
                        for index in 1...myPlayerAtlas.textureNames.count{
                            myPlayerAnimation += [myPlayerAtlas.textureNamed("bPlayerStay\(index)")]
                        }
                        let animation = SKAction.animateWithTextures(myPlayerAnimation, timePerFrame: 0.1)
                        player.runAction(animation)
                    }
                }
                
            }
        }
        
        if(gameStartPressed){
            gameStarted=true
        }
        
        for snowball in self.snowballs{
            snowball.position.y += 40
            if snowball.position.y>self.view?.bounds.height{
                snowball.removeFromParent()
            }
            for player in bplayers{
                if snowball.intersectsNode(player){
                    let index = bplayers.indexOf(player)
                    snowball.removeFromParent();
                    let randomvar = Int(arc4random_uniform(UInt32(bloodImage.count)))
                    self.bloods.append(SKSpriteNode(imageNamed: bloodImage[randomvar]))
                    self.bloods.last?.position = player.position
                    self.bloods.last?.zPosition=2
                    self.bloods.last?.size.width=CGRectGetWidth(self.frame)/15
                    self.bloods.last?.size.height=CGRectGetWidth(self.frame)/15
                    self.addChild(self.bloods.last!)
                    player.position.y+=3
                    if (bhealth[index!]>0){
                        bhealth[index!]-=1
                        var myPlayerAnimation = [SKTexture]()
                        let myPlayerAtlas = SKTextureAtlas(named: "bPlayerHarm")
                        for index in 1...myPlayerAtlas.textureNames.count{
                            myPlayerAnimation += [myPlayerAtlas.textureNamed("bPlayerHarm\(index)")]
                        }
                        let animation = SKAction.animateWithTextures(myPlayerAnimation, timePerFrame: 0.03)
                        player.runAction(animation)
                    }
                    if(bhealth[index!]<1){
                        player.texture = SKTexture(imageNamed: "bLose")
                    }
                    
                }
            }
        }
        for snowball in self.bsnowballs{
            snowball.position.y -= 40
            if snowball.position.y>self.view?.bounds.height{
                snowball.removeFromParent()
            }
            for player in players{
                if snowball.intersectsNode(player){
                    let index = players.indexOf(player)
                    snowball.removeFromParent()
                    let randomvar = Int(arc4random_uniform(UInt32(bloodImage.count)))
                    self.bloods.append(SKSpriteNode(imageNamed: bloodImage[randomvar]))
                    self.bloods.last?.position = player.position
                    self.bloods.last?.zPosition=2
                    self.bloods.last?.size.width=CGRectGetWidth(self.frame)/15
                    self.bloods.last?.size.height=CGRectGetWidth(self.frame)/15
                    self.addChild(self.bloods.last!)
                    player.position.y-=3
                    if (health[index!]>0){
                        health[index!]-=1
                        var myPlayerAnimation = [SKTexture]()
                        let myPlayerAtlas = SKTextureAtlas(named: "myPlayerHarm")
                        for index in 1...myPlayerAtlas.textureNames.count{
                            myPlayerAnimation += [myPlayerAtlas.textureNamed("myPlayerHarm\(index)")]
                        }
                        let animation = SKAction.animateWithTextures(myPlayerAnimation, timePerFrame: 0.03)
                        player.runAction(animation)
                    }
                    if(health[index!]<1){
                        player.texture = SKTexture(imageNamed: "myLose")
                    }
                    
                }
            }
        }
        
        for player in players{
            if(player.position.y > CGRectGetMidY(self.frame)-player.size.height){
                player.position.y = CGRectGetMidY(self.frame)-player.size.height}
            if(player.position.y < 0+player.size.height/2){player.position.y = 0+player.size.height/2}
            if(player.position.x < CGRectGetMinX(self.frame)+player.size.width/2){
                player.position.x = CGRectGetMinX(self.frame)+player.size.width/2
            }
            if(player.position.x > CGRectGetMaxX(self.frame)-player.size.width/2){
                player.position.x = CGRectGetMaxX(self.frame)-player.size.width/2
            }
            
        }
        for player in bplayers{
            if(player.position.y < CGRectGetMidY(self.frame)+player.size.height){
                player.position.y = CGRectGetMidY(self.frame)+player.size.height}
            if(player.position.y > CGRectGetMaxY(self.frame)-player.size.height/2){
                player.position.y = CGRectGetMaxY(self.frame)-player.size.height/2}
            if(player.position.x < CGRectGetMinX(self.frame)+player.size.width/2){
                player.position.x = CGRectGetMinX(self.frame)+player.size.width/2
            }
            if(player.position.x > CGRectGetMaxX(self.frame)-player.size.width/2){
                player.position.x = CGRectGetMaxX(self.frame)-player.size.width/2
            }
        }
        
//            let index = players.indexOf(player)
//            self.stayImageIndex[index!]%=5
//            if stayImageIndex[index!]==0 {stayImageIndex[index!]=1}
//            player.texture = SKTexture(imageNamed: "myPlayerStay\(stayImageIndex[index!])")
//            self.stayImageIndex[index!]+=1
    }
}

//extension GameScene: multiplayerManagerDelegate{
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
