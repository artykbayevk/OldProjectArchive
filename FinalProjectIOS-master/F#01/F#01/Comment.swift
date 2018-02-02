//
//  Comment.swift
//  F#01
//
//  Created by Kamalkhan Artykbayev on 28.04.16.
//  Copyright © 2016 Kamalkhan Artykbayev. All rights reserved.
//

import Foundation
import CoreData


class Comment: NSManagedObject {

// Insert code here to add functionality to your managed object subclass
    @NSManaged var title: String?
    @NSManaged var comment: String?

}
