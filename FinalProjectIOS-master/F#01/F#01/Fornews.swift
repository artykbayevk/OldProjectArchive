//
//  Fornews.swift
//  F#01
//
//  Created by Kamalkhan Artykbayev on 19.04.16.
//  Copyright © 2016 Kamalkhan Artykbayev. All rights reserved.
//

import Foundation
import UIKit
class Fornews:NSObject{
    var title:String
    var text:String
    var date:String
    init(title:String,text:String,date:String) {
        self.title = title
        self.text = text
        self.date = date
    }
}
